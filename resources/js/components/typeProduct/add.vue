<template>
	<div>
		<div class="row">
			<div class="col-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-3">
								<h4 class="card-title">Thêm mới phân loại</h4>
							</div>
							<div class="col-md-6"></div>
						</div>

						<form class="forms-sample">
							<div class="form-group">
								<vs-input
									class="w-100"
									v-model="objData.name[0].content"
									:class="{ 'is-invalid': submitted && $v.objData.name.$error }"
									font-size="40px"
									label-placeholder="Tên phân loại"
								/>
								<el-button size="small" @click="showSettingLangExist('name')">
									Đa ngôn ngữ
								</el-button>
								<div class="dropLanguage" v-if="showLang.title == true">
									<div
										class="form-group"
										v-for="(item, index) in lang"
										:key="index"
									>
										<label v-if="index != 0">{{ item.name }}</label>
										<vs-input
											v-if="index != 0"
											type="text"
											size="default"
											placeholder="Tên phân loại"
											class="w-100"
											v-model="objData.name[index].content"
										/>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<vs-select
											class="selectExample"
											v-model="objData.cate_id"
											placeholder="Thương hiệu"
										>
											<vs-select-item :value="0" text="Chọn thương hiệu" />
											<vs-select-item
												:value="item.id"
												:text="JSON.parse(item.name)[0].content"
												v-for="(item, index) in categoryList"
												:key="'f' + index"
											/>
										</vs-select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Ảnh đại diện</label>
										<image-upload
											v-model="objData.avatar"
											type="avatar"
											:title="'phan-loai'"
										></image-upload>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="exampleInputName1">Nội dung</label>
								<TinyMce v-model="objData.content" />
								<el-button size="small" @click="showSettingLangExist('content')">
									Đa ngôn ngữ
								</el-button>
								<div class="dropLanguage" v-if="showLang.content == true">
									<div
										class="form-group"
										v-for="(item, index) in lang"
										:key="index"
									>
										<label v-if="index != 0">{{ item.name }}</label>
										<TinyMce
											v-if="index != 0"
											v-model="objData.content[index].content"
										/>
									</div>
								</div>
							</div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Trạng thái</label>
                                        <vs-select v-model="objData.status">
                                            <vs-select-item value="1" text="Hiện" />
                                            <vs-select-item value="0" text="Ẩn" />
                                        </vs-select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Hiển thị trang chủ</label>
                                        <vs-select v-model="objData.home_status">
                                            <vs-select-item value="1" text="Có" />
                                            <vs-select-item value="0" text="Không" />
                                        </vs-select>
                                    </div>
                                </div>
                            </div>
							<vs-button
								color="success"
								type="gradient"
								class="mr-left-45"
								@click="saveEdit()"
							>
								Lưu lại
							</vs-button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- content-wrapper ends -->
	</div>
</template>

<script>
import { mapActions } from 'vuex';
import TinyMce from '../_common/tinymce';
export default {
	data() {
		return {
			showLang: {
				title: false,
				content: false,
			},
			objData: {
				name: [
					{
						lang_code: 'vi',
						content: '',
					},
				],
				content: [
					{
						lang_code: 'vi',
						content: '',
					},
				],
				avatar: '',
				status: 1,
				cate_id: '',
				home_status: 0,
			},
			categoryList: [],
			lang: [],
			img: '',
			submitted: false,
		};
	},
	components: {
		TinyMce,
	},
	methods: {
		...mapActions(['saveTypeCate', 'listLanguage', 'loadings', 'listCate']),
		nameImage(event) {
			this.objData.avatar = event;
		},
		showSettingLangExist(value) {
			if (value == 'name') {
				this.showLang.title = !this.showLang.title;
				this.lang.forEach((value, index) => {
					if (!this.objData.name[index] && value.code != this.objData.name[0].lang_code) {
						var oj = {};
						oj.lang_code = value.code;
						oj.content = '';
						this.objData.name.push(oj);
					}
				});
			}
			if (value == 'content') {
				this.showLang.content = !this.showLang.content;
				this.lang.forEach((value, index) => {
					if (
						!this.objData.content[index] &&
						value.code != this.objData.content[0].lang_code
					) {
						var oj = {};
						oj.lang_code = value.code;
						oj.content = '';
						this.objData.content.push(oj);
					}
				});
			}
			if (value == 'description') {
				this.showLang.description = !this.showLang.description;
				this.lang.forEach((value, index) => {
					if (
						!this.objData.description[index] &&
						value.code != this.objData.description[0].lang_code
					) {
						var oj = {};
						oj.lang_code = value.code;
						oj.content = '';
						this.objData.description.push(oj);
					}
				});
			}
		},
		listCategory() {
			this.loadings(true);
			this.listCate().then(response => {
				this.loadings(false);
				this.categoryList = response.data;
			});
		},
		saveEdit() {
			this.errors = [];
			if (this.objData.name[0].content == '')
				this.errors.push('Tên loại không được để trống');
			if (this.objData.cate_id == '') this.errors.push('Danh mục cha không được để trống');
			if (this.errors.length > 0) {
				this.errors.forEach((value, key) => {
					this.$notify.error(value);
				});
				return;
			} else {
				this.loadings(true);
				this.saveTypeCate(this.objData)
					.then(response => {
						this.loadings(false);
						this.$router.push({ name: 'list_type_cate' });
						this.$notify.success('Thêm loại sản phẩm thành công');
						this.$router.push({ name: 'list_type_cate' });
					})
					.catch(error => {
						this.loadings(false);
						this.$notify.error('Thêm loại sản phẩm thất bại');
					});
			}
		},
		listLang() {
			this.listLanguage()
				.then(response => {
					this.loadings(false);
					this.lang = response.data;
				})
				.catch(error => {});
		},
	},
	mounted() {
		this.loadings(true);
		this.listLang();
		this.listCategory();
	},
};
</script>

<style>
</style>