<template>
	<!-- partial -->
	<div>
		<h3 class="page-title">Đơn hàng cần kiểm tra</h3>
		<div class="row">
			<div class="col-md-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<div class="row" v-if="list.length == 0">
							<div class="col-md-2"></div>
							<div class="col-md-4">
								<div class="mb-0 flex-grow">
									<h5 class="mr-2 mb-2">Quản lý đơn hàng của bạn</h5>
									<p class="mb-0 font-weight-light">
										Đơn hàng cần kiểm tra là đơn hàng mà
										<br />
										đang ở trạng thái kiểm tra thanh toán
										<br />
									</p>
								</div>
							</div>
							<div class="col-md-4">
								<img
									width="100%"
									height="400"
									src="http://bizweb.dktcdn.net/assets/admin/images/empty-states/customer.svg"
								/>
							</div>
							<div class="col-md-2"></div>
						</div>
						<vs-input
							v-if="list.length > 0"
							icon="search"
							placeholder="Search"
							v-model="keyword"
							@keyup="searchCategory()"
						/>
						<vs-table max-items="5" pagination :data="list" v-if="list.length > 0">
							<template slot="thead">
								<vs-th>Mã đơn hàng</vs-th>
								<vs-th>Chỉnh sửa lúc</vs-th>
								<vs-th>Khach hàng</vs-th>
								<vs-th>Trạng thái</vs-th>
								<vs-th>Trạng thái thanh toán</vs-th>
								<vs-th>Hành động</vs-th>
							</template>
							<template slot-scope="{ data }">
								<vs-tr :key="indextr" v-for="(tr, indextr) in data">
									<vs-td :data="tr.id">#{{ tr.code_bill }}</vs-td>
									<vs-td :data="tr.created_at">
										{{ formatDate(tr.created_at) }}
									</vs-td>
									<vs-td :data="tr.cus_name">
										{{ tr.cus_name }}
									</vs-td>
									<vs-td :data="tr.id">
										<vs-chip color="primary" v-if="tr.statu == 0">
											Đợi kiểm tra
										</vs-chip>
									</vs-td>
									<vs-td :data="tr.id">
										<vs-chip color="primary" v-if="tr.payment_status == 0">
											Đợi thanh toán
										</vs-chip>
										<vs-chip color="success" v-if="tr.payment_status == 1">
											Đã thanh toán
										</vs-chip>
									</vs-td>
									<vs-td :data="tr.id">
										<router-link
											:to="{
												name: 'billDetail',
												params: { code_bill: tr.code_bill },
											}"
										>
											<vs-button
												vs-type="gradient"
												size="lagre"
												color="success"
												icon="edit"
											></vs-button>
										</router-link>
										<vs-button
											vs-type="gradient"
											size="lagre"
											color="red"
											icon="delete_forever"
											@click="confirmDestroy(tr.id)"
										></vs-button>
									</vs-td>
								</vs-tr>
							</template>
						</vs-table>
					</div>
				</div>
			</div>
		</div>
		<vs-popup style="width: 100%" title="Thêm mới danh mục" :active.sync="popupActivo">
			<ModalAdd @closePopup="closePop($event)" />
		</vs-popup>
	</div>
</template>


<script>
import ModalAdd from '../../components/layouts/modal/category/add';

import { mapActions } from 'vuex';
export default {
	data: () => ({
		keyword: null,
		popupActivo: false,
		list: [],
		timer: 0,
		id_item: '',
	}),
	components: {
		ModalAdd,
	},
	computed: {},
	methods: {
		...mapActions(['draftBill', 'destroyCate', 'loadings']),
		closePop(event) {
			this.listCategory();
			this.popupActivo = event;
		},
		formatDate(value) {
			const date = new Date(value),
				month = date.getMonth() > 9 ? date.getMonth() : `0${date.getMonth()}`,
				day = date.getDate() > 9 ? date.getDate() : `0${date.getDate()}`;
			return `${date.getFullYear()}-${month}-${day}`;
		},
		draftBills() {
			this.loadings(true);
			this.draftBill({ keyword: this.keyword, status: 0 }).then(response => {
				this.loadings(false);
				this.list = response.data;
			});
		},
		searchCategory() {
			if (this.timer) {
				clearTimeout(this.timer);
				this.timer = null;
			}
			this.timer = setTimeout(() => {
				this.draftBill({ keyword: this.keyword, status: 0 }).then(response => {
					this.list = response.data;
				});
			}, 800);
		},
		// destroy(){
		//   this.loadings(true);
		//   this.destroyCate(this.id_item)
		//   .then(response => {
		//     this.listCategory()
		//     this.loadings(false);
		//     this.$vs.notify({
		//           title: "Xóa danh mục",
		//           text: "Thành công",
		//           color: "success",
		//           position: "top-right"
		//         });
		//   });
		// },
		// confirmDestroy(id){
		//   this.id_item = id;
		//   this.$vs.dialog({
		//     type:'confirm',
		//     color: 'danger',
		//     title: `Bạn có chắc chắn`,
		//     text: 'Xóa danh mục này',
		//     accept:this.destroy
		//   })
		// }
	},
	mounted() {
		this.draftBills();
	},
};
</script>
<style>
</style>