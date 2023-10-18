@extends('pages_layout')

@section('content')

<div id="wp-main-content" class="clearfix main-page">

      <div class="custom-breadcrumb text-light text-center show-bg" style="background-image: url('../wp-content/uploads/2020/12/bg-breadcrumb.jpg')">

                      <div class="breadcrumb-overlay" style="background-color: rgba(17,22,31, 0.5)"></div>
                  <div class="breadcrumb-main">
            <div class="container">
               <div class="breadcrumb-container-inner" style="padding-top:100px;padding-bottom:100px">
                  <h2 class="heading-title">Apartment</h2>				<ol class="breadcrumb"><li><a href="https://www.gavias-theme.com/wp/tolips">Home</a> </li> <li class="active">Apartment</li></ol>			 </div>
            </div>
          </div>
      </div>
            <div class="container-layout-content container">
      <div class="content-page-wrap">
               <div class="main-page-content base-layout row has-no-sidebar">

              <div class="content-page col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="content-page-inner">
                        <div class="clearfix post-213 page type-page status-publish hentry" id="213">





      <div v-cloak id="ulisting-inventory-list">

  <div class=" ulisting_element_540_1592186003560 ulisting_element_540_1592186003560" >
      <div class="container">

  <div class=" stm-row  ulisting_element_810_1592186003560">

  <div class=" stm-col  stm-col-xl-8 stm-col-lg-8 stm-col-md-0 stm-col-sm-0 stm-col-12 ulisting_element_500_1592186003560" >
      <div class=" stm-row ulisting_element_60_1592195523506">
  <div class=" stm-col  stm-col-xl-3 stm-col-lg-3 stm-col-md-3 stm-col-sm-3 stm-col-12 ulisting_element_950_1592195523506" >
      <div class=" ulisting-matches-wrap  ulisting_element_800_1592186103498"><span class="ulisting-matches-count"></span> <span class="ulisting-matcher-text">Properties</span></div></div>

  <div class=" stm-col  stm-col-xl-9 stm-col-lg-9 stm-col-md-9 stm-col-sm-9 stm-col-12 ulisting_element_970_1592195533019" >
      <div class="listing-reset-filter"><a  href="index.html"  class=" ulisting_element_360_1592186088098" > <i class="las la-sync"></i>Reset filter </a></div>



  <div class="listing-sort"><i class="icon las la-sort"></i><div class=" ulisting_element_50_1592186084246" >
                      <stm-listing-order inline-template
                                          v-on:set-order="set_order"
                                         :listing_order="listing_order_data?.listing_order"
                                         :order_by_default="listing_order_data?.order_by_default"
                                         :view_type="listing_order_data?.view_type">
                                          <div> <ul data-v-if="view_type=='list'" class="list-inline">
              <li class="list-inline-item" data-v-for=" (item, key)  in listing_order">
                  <span style="cursor: pointer" data-v-on_click="selected=item.id; change()"></span>
              </li>
           </ul> <ulisting-select2 v-if="selected && view_type=='dropdowns'" data-v-bind_options="listing_order" v-model="selected" text="label" theme="bootstrap4" autoclear='false'></ulisting-select2> </div>
                      </stm-listing-order>
                  </div></div><div class=" ulisting_element_280_1592192686988" >
                              <stm-column-switch inline-template v-on:column-switch="send_request">
                                  <div>
                                      <ul class="ulisting-column-switch">
                        <li data-v-bind_class="{active:type=='list'}"><span data-v-on_click="set_view_type('list')" class="stm-cursor-pointer"><i class="las la-list-ul"></i></span></li>
                        <li data-v-bind_class="{active:type=='grid'}"><span data-v-on_click="set_view_type('grid')"  class="stm-cursor-pointer"><i class="las la-border-all"></i></span></li>
                    </ul>
                                  </div>
                              </stm-column-switch>
                          </div>



  </div>
  </div>
  <div class='scroll-panel-list'><div class=" ulisting_element_510_1592186108532"> <div data-v-bind_class="{'ulisting-preloader':preloader}" id="stm-listing-list-panel">  <div class='stm-row'></div> <div class='stm-row'><div class="ulisting-item-grid template_1 stm-col-xl-6 stm-col-lg-6 stm-col-md-6 stm-col-sm-12 stm-col-12">
     <div class="inventory-item-content">

  <div class=" ulisting_element_790_1608262585192 ulisting_element_790_1608262585192" >
      <div class="container">

  <div class=" stm-row  ulisting_element_540_1608262585192">

  <div class=" stm-col  stm-col-xl-0 stm-col-lg-0 stm-col-md-0 stm-col-sm-0 stm-col-0 ulisting_element_660_1608262585192" >

  <div class="listing-block style-1 item-grid-1">
      <div class="listing-thumbnail">
          <div class='ulisting-thumbnail-panel'><a href="../listing/one-canal-apartments/index.html" class="listing-link"><img src="../wp-content/uploads/2020/12/listing-14-600x450.jpg" alt="Tolips - Real Estate WordPress Theme"></a></div>


  <div class=" ulisting_element_210_1608262607093" >
     <span class="photo-count">
        5
      </span>
  </div>


          <div class="listing-category"><span class="cat-item">Buy</span><span class="cat-item">Rent</span></div>      		<div class="wishlist-icon-content">
              <a href="#" data-post_id="231" class="ajax-wishlist-link wishlist-add" title="Wishlist">
                  <i class="icon far fa-heart"></i>
                              </a>
       </div>
          </div>

      <div class="listing-content">
          <div class="content-inner">
              <h3 class="listing-title">
                  <a href="../listing/one-canal-apartments/index.html">
                      One Canal Apartments				</a>
              </h3>
              <div class="lt-location">277 Lexington Ave, Rochester, NY</div>			<div class="listing-price">
                  <div class='ulisting-listing-price'>  <span class='ulisting-listing-price-new'>&#36;1,900<span class='suffix'>Sqft</span></span> </div>			</div>
          </div>
          <div class="content-bottom clearfix">

              <div class='ulisting-attribute-template type-1 attribute_bedrooms'>
                  <span class='ulisting-attribute-template-icon'><i class='las la-bed'></i></span>
                  <span class='ulisting-attribute-template-value'>3 <span class='sub-title'>Beds</span></span>
            </div>
              <div class='ulisting-attribute-template type-1 attribute_bathrooms'>
                  <span class='ulisting-attribute-template-icon'><i class='la la-bathtub'></i></span>
                  <span class='ulisting-attribute-template-value'>1 <span class='sub-title'>Baths</span></span>
            </div>
              <div class='ulisting-attribute-template type-1 attribute_area'>
                  <span class='ulisting-attribute-template-icon'><i class='lab la-jira'></i></span>
                  <span class='ulisting-attribute-template-value'>500 <span class='sub-title'>Sqft</span></span>
            </div> 		  </div>
      </div>
  </div>
  </div>
  </div>
      </div>
  </div>
     </div>
  </div>
  <div class="ulisting-item-grid template_1 stm-col-xl-6 stm-col-lg-6 stm-col-md-6 stm-col-sm-12 stm-col-12">
     <div class="inventory-item-content">

  <div class=" ulisting_element_790_1608262585192 ulisting_element_790_1608262585192" >
      <div class="container">

  <div class=" stm-row  ulisting_element_540_1608262585192">

  <div class=" stm-col  stm-col-xl-0 stm-col-lg-0 stm-col-md-0 stm-col-sm-0 stm-col-0 ulisting_element_660_1608262585192" >

  <div class="listing-block style-1 item-grid-1">
      <div class="listing-thumbnail">
          <div class='ulisting-thumbnail-panel'><a href="../listing/peninsula-apartments/index.html" class="listing-link"><img src="../wp-content/uploads/2020/12/listing-13-600x450.jpg" alt="Tolips - Real Estate WordPress Theme"></a></div>


  <div class=" ulisting_element_210_1608262607093" >
     <span class="photo-count">
        5
      </span>
  </div>


          <div class="listing-category"><span class="cat-item">Rent</span><span class="cat-item">Sold</span></div>      		<div class="wishlist-icon-content">
              <a href="#" data-post_id="230" class="ajax-wishlist-link wishlist-add" title="Wishlist">
                  <i class="icon far fa-heart"></i>
                              </a>
       </div>
          </div>

      <div class="listing-content">
          <div class="content-inner">
              <h3 class="listing-title">
                  <a href="../listing/peninsula-apartments/index.html">
                      Peninsula Apartments				</a>
              </h3>
              <div class="lt-location">50 White Oak Ave, Encino, CA</div>			<div class="listing-price">
                  <div class='ulisting-listing-price'>  <span class='ulisting-listing-price-new'>&#36;1,200<span class='suffix'>Monthly</span></span> </div>			</div>
          </div>
          <div class="content-bottom clearfix">

              <div class='ulisting-attribute-template type-1 attribute_bedrooms'>
                  <span class='ulisting-attribute-template-icon'><i class='las la-bed'></i></span>
                  <span class='ulisting-attribute-template-value'>2 <span class='sub-title'>Beds</span></span>
            </div>
              <div class='ulisting-attribute-template type-1 attribute_bathrooms'>
                  <span class='ulisting-attribute-template-icon'><i class='la la-bathtub'></i></span>
                  <span class='ulisting-attribute-template-value'>1 <span class='sub-title'>Baths</span></span>
            </div>
              <div class='ulisting-attribute-template type-1 attribute_area'>
                  <span class='ulisting-attribute-template-icon'><i class='lab la-jira'></i></span>
                  <span class='ulisting-attribute-template-value'>800 <span class='sub-title'>Sqft</span></span>
            </div> 		  </div>
      </div>
  </div>
  </div>
  </div>
      </div>
  </div>
     </div>
  </div>
  <div class="ulisting-item-grid template_1 stm-col-xl-6 stm-col-lg-6 stm-col-md-6 stm-col-sm-12 stm-col-12">
     <div class="inventory-item-content">

  <div class=" ulisting_element_790_1608262585192 ulisting_element_790_1608262585192" >
      <div class="container">

  <div class=" stm-row  ulisting_element_540_1608262585192">

  <div class=" stm-col  stm-col-xl-0 stm-col-lg-0 stm-col-md-0 stm-col-sm-0 stm-col-0 ulisting_element_660_1608262585192" >

  <div class="listing-block style-1 item-grid-1">
      <div class="listing-thumbnail">
          <div class='ulisting-thumbnail-panel'><a href="../listing/west-square-apartments/index.html" class="listing-link"><img src="../wp-content/uploads/2020/12/listing-12-600x450.jpg" alt="Tolips - Real Estate WordPress Theme"></a></div>


  <div class=" ulisting_element_210_1608262607093" >
     <span class="photo-count">
        5
      </span>
  </div>


          <div class="listing-category"><span class="cat-item">Buy</span><span class="cat-item">Rent</span></div>      		<div class="wishlist-icon-content">
              <a href="#" data-post_id="229" class="ajax-wishlist-link wishlist-add" title="Wishlist">
                  <i class="icon far fa-heart"></i>
                              </a>
       </div>
          </div>

      <div class="listing-content">
          <div class="content-inner">
              <h3 class="listing-title">
                  <a href="../listing/west-square-apartments/index.html">
                      West Square Apartments				</a>
              </h3>
              <div class="lt-location">15 Via Bahia, Hesperia, CA</div>			<div class="listing-price">
                  <div class='ulisting-listing-price'>  <span class='ulisting-listing-price-new'>&#36;2,100<span class='suffix'>Sqft</span></span> </div>			</div>
          </div>
          <div class="content-bottom clearfix">

              <div class='ulisting-attribute-template type-1 attribute_bedrooms'>
                  <span class='ulisting-attribute-template-icon'><i class='las la-bed'></i></span>
                  <span class='ulisting-attribute-template-value'>2 <span class='sub-title'>Beds</span></span>
            </div>
              <div class='ulisting-attribute-template type-1 attribute_bathrooms'>
                  <span class='ulisting-attribute-template-icon'><i class='la la-bathtub'></i></span>
                  <span class='ulisting-attribute-template-value'>2 <span class='sub-title'>Baths</span></span>
            </div>
              <div class='ulisting-attribute-template type-1 attribute_area'>
                  <span class='ulisting-attribute-template-icon'><i class='lab la-jira'></i></span>
                  <span class='ulisting-attribute-template-value'>1200 <span class='sub-title'>Sqft</span></span>
            </div> 		  </div>
      </div>
  </div>
  </div>
  </div>
      </div>
  </div>
     </div>
  </div>
  <div class="ulisting-item-grid template_1 stm-col-xl-6 stm-col-lg-6 stm-col-md-6 stm-col-sm-12 stm-col-12">
     <div class="inventory-item-content">

  <div class=" ulisting_element_790_1608262585192 ulisting_element_790_1608262585192" >
      <div class="container">

  <div class=" stm-row  ulisting_element_540_1608262585192">

  <div class=" stm-col  stm-col-xl-0 stm-col-lg-0 stm-col-md-0 stm-col-sm-0 stm-col-0 ulisting_element_660_1608262585192" >

  <div class="listing-block style-1 item-grid-1">
      <div class="listing-thumbnail">
          <div class='ulisting-thumbnail-panel'><a href="../listing/elevation-small-apartments/index.html" class="listing-link"><img src="../wp-content/uploads/2020/12/listing-11-600x450.jpg" alt="Tolips - Real Estate WordPress Theme"></a></div>


  <div class=" ulisting_element_210_1608262607093" >
     <span class="photo-count">
        5
      </span>
  </div>


          <div class="listing-category"><span class="cat-item">Rent</span><span class="cat-item">Sold</span></div>      		<div class="wishlist-icon-content">
              <a href="#" data-post_id="227" class="ajax-wishlist-link wishlist-add" title="Wishlist">
                  <i class="icon far fa-heart"></i>
                              </a>
       </div>
          </div>

      <div class="listing-content">
          <div class="content-inner">
              <h3 class="listing-title">
                  <a href="../listing/elevation-small-apartments/index.html">
                      Elevation Small Apartments				</a>
              </h3>
              <div class="lt-location">25 San Bernardino, CA</div>			<div class="listing-price">
                  <div class='ulisting-listing-price'>  <span class='ulisting-listing-price-new'>&#36;2,200<span class='suffix'>Monthly</span></span> </div>			</div>
          </div>
          <div class="content-bottom clearfix">

              <div class='ulisting-attribute-template type-1 attribute_bedrooms'>
                  <span class='ulisting-attribute-template-icon'><i class='las la-bed'></i></span>
                  <span class='ulisting-attribute-template-value'>2 <span class='sub-title'>Beds</span></span>
            </div>
              <div class='ulisting-attribute-template type-1 attribute_bathrooms'>
                  <span class='ulisting-attribute-template-icon'><i class='la la-bathtub'></i></span>
                  <span class='ulisting-attribute-template-value'>1 <span class='sub-title'>Baths</span></span>
            </div>
              <div class='ulisting-attribute-template type-1 attribute_area'>
                  <span class='ulisting-attribute-template-icon'><i class='lab la-jira'></i></span>
                  <span class='ulisting-attribute-template-value'>800 <span class='sub-title'>Sqft</span></span>
            </div> 		  </div>
      </div>
  </div>
  </div>
  </div>
      </div>
  </div>
     </div>
  </div>
  <div class="ulisting-item-grid template_1 stm-col-xl-6 stm-col-lg-6 stm-col-md-6 stm-col-sm-12 stm-col-12">
     <div class="inventory-item-content">

  <div class=" ulisting_element_790_1608262585192 ulisting_element_790_1608262585192" >
      <div class="container">

  <div class=" stm-row  ulisting_element_540_1608262585192">

  <div class=" stm-col  stm-col-xl-0 stm-col-lg-0 stm-col-md-0 stm-col-sm-0 stm-col-0 ulisting_element_660_1608262585192" >

  <div class="listing-block style-1 item-grid-1">
      <div class="listing-thumbnail">
          <div class='ulisting-thumbnail-panel'><a href="../listing/nova-quincy-apartment/index.html" class="listing-link"><img src="../wp-content/uploads/2020/12/listing-10-600x450.jpg" alt="Tolips - Real Estate WordPress Theme"></a></div>


  <div class=" ulisting_element_210_1608262607093" >
     <span class="photo-count">
        5
      </span>
  </div>


          <div class="listing-category"><span class="cat-item">Buy</span><span class="cat-item">Rent</span></div>      		<div class="wishlist-icon-content">
              <a href="#" data-post_id="226" class="ajax-wishlist-link wishlist-add" title="Wishlist">
                  <i class="icon far fa-heart"></i>
                              </a>
       </div>
          </div>

      <div class="listing-content">
          <div class="content-inner">
              <h3 class="listing-title">
                  <a href="../listing/nova-quincy-apartment/index.html">
                      Nova Quincy Apartment				</a>
              </h3>
              <div class="lt-location">80 Broklyn Street, New York. USA</div>			<div class="listing-price">
                  <div class='ulisting-listing-price'>  <span class='ulisting-listing-price-new'>&#36;1,800<span class='suffix'>Monthly</span></span> </div>			</div>
          </div>
          <div class="content-bottom clearfix">

              <div class='ulisting-attribute-template type-1 attribute_bedrooms'>
                  <span class='ulisting-attribute-template-icon'><i class='las la-bed'></i></span>
                  <span class='ulisting-attribute-template-value'>1 <span class='sub-title'>Beds</span></span>
            </div>
              <div class='ulisting-attribute-template type-1 attribute_bathrooms'>
                  <span class='ulisting-attribute-template-icon'><i class='la la-bathtub'></i></span>
                  <span class='ulisting-attribute-template-value'>2 <span class='sub-title'>Baths</span></span>
            </div>
              <div class='ulisting-attribute-template type-1 attribute_area'>
                  <span class='ulisting-attribute-template-icon'><i class='lab la-jira'></i></span>
                  <span class='ulisting-attribute-template-value'>200 <span class='sub-title'>Sqft</span></span>
            </div> 		  </div>
      </div>
  </div>
  </div>
  </div>
      </div>
  </div>
     </div>
  </div>
  <div class="ulisting-item-grid template_1 stm-col-xl-6 stm-col-lg-6 stm-col-md-6 stm-col-sm-12 stm-col-12">
     <div class="inventory-item-content">

  <div class=" ulisting_element_790_1608262585192 ulisting_element_790_1608262585192" >
      <div class="container">

  <div class=" stm-row  ulisting_element_540_1608262585192">

  <div class=" stm-col  stm-col-xl-0 stm-col-lg-0 stm-col-md-0 stm-col-sm-0 stm-col-0 ulisting_element_660_1608262585192" >

  <div class="listing-block style-1 item-grid-1">
      <div class="listing-thumbnail">
          <div class='ulisting-thumbnail-panel'><a href="../listing/colorful-small-apartment/index.html" class="listing-link"><img src="../wp-content/uploads/2020/12/listing-9-600x450.jpg" alt="Tolips - Real Estate WordPress Theme"></a></div>


  <div class=" ulisting_element_210_1608262607093" >
     <span class="photo-count">
        5
      </span>
  </div>


                        <div class="wishlist-icon-content">
              <a href="#" data-post_id="225" class="ajax-wishlist-link wishlist-add" title="Wishlist">
                  <i class="icon far fa-heart"></i>
                              </a>
       </div>
          </div>

      <div class="listing-content">
          <div class="content-inner">
              <h3 class="listing-title">
                  <a href="../listing/colorful-small-apartment/index.html">
                      Colorful Small Apartment				</a>
              </h3>
              <div class="lt-location">26 Voyage Path, California</div>			<div class="listing-price">
                  <div class='ulisting-listing-price'>  <span class='ulisting-listing-price-new'>&#36;1,100<span class='suffix'>Sqft</span></span> </div>			</div>
          </div>
          <div class="content-bottom clearfix">

              <div class='ulisting-attribute-template type-1 attribute_bedrooms'>
                  <span class='ulisting-attribute-template-icon'><i class='las la-bed'></i></span>
                  <span class='ulisting-attribute-template-value'>2 <span class='sub-title'>Beds</span></span>
            </div>
              <div class='ulisting-attribute-template type-1 attribute_bathrooms'>
                  <span class='ulisting-attribute-template-icon'><i class='la la-bathtub'></i></span>
                  <span class='ulisting-attribute-template-value'>2 <span class='sub-title'>Baths</span></span>
            </div>
              <div class='ulisting-attribute-template type-1 attribute_area'>
                  <span class='ulisting-attribute-template-icon'><i class='lab la-jira'></i></span>
                  <span class='ulisting-attribute-template-value'>1500 <span class='sub-title'>Sqft</span></span>
            </div> 		  </div>
      </div>
  </div>
  </div>
  </div>
      </div>
  </div>
     </div>
  </div>
  </div><h3 class='uListing-no-results uListing-no-lists' data-v-if='count === 0'>No Results Found</h3> </div> </div></div>
  <div class=" stm-listing-pagination ulisting_element_510_1592186106647" ><stm-listing-pagination
                      prev="Prev"
                      next="Next"
                      :url="url"
                      :page="paginate.page"
                      v-on:url-update="set_url"
                      v-on:pagination-update="pagination_update"
                      :page_count="paginate.pageCount">
                  </stm-listing-pagination></div>



  </div>

  <div class=" stm-col  stm-col-xl-4 stm-col-lg-4 stm-col-md-0 stm-col-sm-0 stm-col-12 ulisting_element_0_1592192590409" >
      <div class='filter-sidebar-wrapper filter-sidebar-style'><div class=" ulisting_element_120_1592193824500">
      <div class="listing-sidebar-filter-content">
          <div data-v-if="!filter.show" class="text-center">
              <div class="ulisting-preloader-ring"><div></div><div></div><div></div><div></div></div>
          </div>

          <div class="listing-filter-wrapper ulisting-search-form-wrapper">
              <stm-search-form-advanced
                  class="ulisting-form"
                  inline-template
                  data-v-on_url-update="set_url"
                  data-v-on_location-update="location_update"
                  data-v-on_exists-filter="exists_filter"
                  data-v-bind_show="filter.show"
                  data-v-bind_url="url"
                  data-v-bind_listing_type_id="listing_type_id"
                  data-v-bind_search_form_type="search_form_type"
                  data-v-bind_data="filter.field_data"
                  data-v-bind_field_type="filter.field_type"
                  data-v-bind_field_show="field_show"
                  data-v-bind_search_fields="filter.search_fields">
                      <div>
                          <div data-v-if="show" class="ulisting-form-fields">
                                  <stm-field-search inline-template
            class="ulisting-form-gruop "
            v-model='data.ulisitng_title'
            placeholder="Enter keywords"
            data-v-bind_callback_change='change' >
          <div>
                              <label>Search</label>
                          <input class="form-control" type="text" data-v-model="value" data-v-on_input="updateValue($event.target.value)"  data-v-bind_name="name" data-v-bind_placeholder="placeholder">
          </div>
      </stm-field-search>

          <stm-field-dropdown inline-template
                data-v-bind_key="generateRandomId()"
                v-model='data.region'
                placeholder="City"
                order_by='name'
                order='ASC'
                data-v-bind_callback_change='change'
                data-v-bind_items='data.attribute_items.region'
                hide_empty=''
                attribute_name='region' >
              <div class="ulisting-form-gruop">
                                      <label>City</label>
                                  <ulisting-select2 data-v-bind_key="generateRandomId()" data-v-bind_options='list' data-v-bind_placeholder="placeholder" data-v-model='value' clear="true" theme=''></ulisting-select2>
              </div>
          </stm-field-dropdown>


          <stm-field-dropdown inline-template
                data-v-bind_key="generateRandomId()"
                v-model='data.category'
                placeholder="Category"
                order_by='name'
                order='ASC'
                data-v-bind_callback_change='change'
                data-v-bind_items='data.attribute_items.category'
                hide_empty=''
                attribute_name='category' >
              <div class="ulisting-form-gruop">
                                      <label>Category</label>
                                  <ulisting-select2 data-v-bind_key="generateRandomId()" data-v-bind_options='list' data-v-bind_placeholder="placeholder" data-v-model='value' clear="true" theme=''></ulisting-select2>
              </div>
          </stm-field-dropdown>


  <div class="advanced-search-wrapper ulisting-form-gruop">
                      <div class="action-advanced-search"><a href="#" class="btn-advanced-search"><i class="icon las la-sliders-h"></i>Advanced</a></div>
                          <div class="advanced-search-content">
                              <div class="advanced-search-fields-content">
  <stm-field-checkbox inline-template
          data-v-bind_key="generateRandomId()"
          v-model='data.bedrooms'
          order_by='name'
          order='ASC'
          data-v-bind_callback_change='change'
          data-v-bind_items='data.attribute_items.bedrooms'
          data-v-bind_hide_empty='""'
          >
      <div class="ulisting-form-gruop ulisting-field-checkboxs checkbox-filter field-checkbox-bedrooms">
                      <label class="title-field">Bedrooms</label>

          <div class="show-results">
              <span data-v-if="value.length" class="result-item" data-v-for='item_value in value'><span data-v-for='item_list in list' data-v-if="item_list.value == item_value"></span></span>
              <span data-v-if="!value.length">
                  Select
              </span>
          </div>

          <div class="checkbox-filter-content">
              <div class="content-inner">
                  <div class="stm-row">
                      <div class='stm-col-xl-6 stm-col-lg-6 stm-col-md-6 stm-col-sm-6 stm-col-xs-12 checkbox-input' data-v-for='(item, index) in list'>
                          <div class="lt-checkbox pretty p-icon p-curve p-smooth">
                              <input data-v-on_change='updateValue' type='checkbox' data-v-bind_value='item.value' data-v-model='value' >
                              <div class="state">
                                  <i class="icon fas fa-check"></i>
                                  <label><span class="item-name">{{item.name}}</span> <span class="d-none"></span> </label>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </stm-field-checkbox>

  <stm-field-checkbox inline-template
          data-v-bind_key="generateRandomId()"
          v-model='data.bathrooms'
          order_by='name'
          order='ASC'
          data-v-bind_callback_change='change'
          data-v-bind_items='data.attribute_items.bathrooms'
          data-v-bind_hide_empty='""'
          >
      <div class="ulisting-form-gruop ulisting-field-checkboxs checkbox-filter field-checkbox-bathrooms">
                      <label class="title-field">Bathrooms</label>

          <div class="show-results">
              <span data-v-if="value.length" class="result-item" data-v-for='item_value in value'><span data-v-for='item_list in list' data-v-if="item_list.value == item_value"></span></span>
              <span data-v-if="!value.length">
                  Select
              </span>
          </div>

          <div class="checkbox-filter-content">
              <div class="content-inner">
                  <div class="stm-row">
                      <div class='stm-col-xl-6 stm-col-lg-6 stm-col-md-6 stm-col-sm-6 stm-col-xs-12 checkbox-input' data-v-for='(item, index) in list'>
                          <div class="lt-checkbox pretty p-icon p-curve p-smooth">
                              <input data-v-on_change='updateValue' type='checkbox' data-v-bind_value='item.value' data-v-model='value' >
                              <div class="state">
                                  <i class="icon fas fa-check"></i>
                                  <label><span class="item-name">{{item.name}}</span> <span class="d-none"></span> </label>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </stm-field-checkbox>

  <stm-field-checkbox inline-template
          data-v-bind_key="generateRandomId()"
          v-model='data.garages'
          order_by='name'
          order='ASC'
          data-v-bind_callback_change='change'
          data-v-bind_items='data.attribute_items.garages'
          data-v-bind_hide_empty='""'
          >
      <div class="ulisting-form-gruop ulisting-field-checkboxs checkbox-filter field-checkbox-garages">
                      <label class="title-field">Garages</label>

          <div class="show-results">
              <span data-v-if="value.length" class="result-item" data-v-for='item_value in value'><span data-v-for='item_list in list' data-v-if="item_list.value == item_value"></span></span>
              <span data-v-if="!value.length">
                  Select
              </span>
          </div>

          <div class="checkbox-filter-content">
              <div class="content-inner">
                  <div class="stm-row">
                      <div class='stm-col-xl-6 stm-col-lg-6 stm-col-md-6 stm-col-sm-6 stm-col-xs-12 checkbox-input' data-v-for='(item, index) in list'>
                          <div class="lt-checkbox pretty p-icon p-curve p-smooth">
                              <input data-v-on_change='updateValue' type='checkbox' data-v-bind_value='item.value' data-v-model='value' >
                              <div class="state">
                                  <i class="icon fas fa-check"></i>
                                  <label><span class="item-name">{{item.name}}</span> <span class="d-none"></span> </label>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </stm-field-checkbox>

  <stm-field-range
        inline-template
        class="ulisting-form-gruop ulisting-field-range"
        data-v-bind_key="generateRandomId()"
        v-model='data.area'
        data-v-bind_callback_change='change'
        prefix=''
        suffix=''
        data-v-bind_sign='false'
        min='200'
        max='1500'>
      <div>
                      <label>Sq Ft</label>
                  <div class="field-range-content">
              <vue-range-slider data-v-bind_min="min"
                                data-v-bind_max="max"
                                data-v-bind_from="from"
                                data-v-bind_to="to"
                                type="double"
                                data-v-bind_prefix="prefix"
                                data-v-bind_postfix="suffix"
                                data-v-on_callback='updateValue'
                                data-v-bind_key="generateRandomId()" >
              </vue-range-slider>
          </div>
      </div>
  </stm-field-range>

  <stm-field-range
        inline-template
        class="ulisting-form-gruop ulisting-field-range"
        data-v-bind_key="generateRandomId()"
        v-model='data.price'
        data-v-bind_callback_change='change'
        prefix='$'
        suffix=''
        data-v-bind_sign='false'
        min='1100'
        max='2200'>
      <div>
                      <label>Price</label>
                  <div class="field-range-content">
              <vue-range-slider data-v-bind_min="min"
                                data-v-bind_max="max"
                                data-v-bind_from="from"
                                data-v-bind_to="to"
                                type="double"
                                data-v-bind_prefix="prefix"
                                data-v-bind_postfix="suffix"
                                data-v-on_callback='updateValue'
                                data-v-bind_key="generateRandomId()" >
              </vue-range-slider>
          </div>
      </div>
  </stm-field-range>

  <stm-field-checkbox inline-template
          data-v-bind_key="generateRandomId()"
          v-model='data.amenities'
          order_by='name'
          order='ASC'
          data-v-bind_callback_change='change'
          data-v-bind_items='data.attribute_items.amenities'
          data-v-bind_hide_empty='""'
          >
      <div class="ulisting-form-gruop ulisting-field-checkboxs checkbox-filter field-checkbox-amenities">
                      <label class="title-field">Amenities</label>

          <div class="show-results">
              <span data-v-if="value.length" class="result-item" data-v-for='item_value in value'><span data-v-for='item_list in list' data-v-if="item_list.value == item_value"></span></span>
              <span data-v-if="!value.length">
                  Select
              </span>
          </div>

          <div class="checkbox-filter-content">
              <div class="content-inner">
                  <div class="stm-row">
                      <div class='stm-col-xl-4 stm-col-lg-4 stm-col-md-6 stm-col-sm-6 stm-col-xs-12 checkbox-input' data-v-for='(item, index) in list'>
                          <div class="lt-checkbox pretty p-icon p-curve p-smooth">
                              <input data-v-on_change='updateValue' type='checkbox' data-v-bind_value='item.value' data-v-model='value' >
                              <div class="state">
                                  <i class="icon fas fa-check"></i>
                                  <label><span class="item-name">{{item.name}}</span> <span class="d-none"></span> </label>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </stm-field-checkbox>
  </div></div></div>
                          </div>
                      </div>
              </stm-search-form-advanced>
          </div>
      </div>
  <div data-v-if="filter.show"><div class="sidebar wp-sidebar margin-top-30"><div class="sidebar-inner"><aside id="custom_html-2" class="widget_text widget clearfix widget_custom_html"><div class="textwidget custom-html-widget"><div class="gsc-listings-banner text-left margin-bottom-0">
      <div class="listings-banner-content">
          <div class="banner-image">
              <img src="../wp-content/uploads/2020/12/listing-4.jpg" alt="We are looking for partners">
          </div>
          <div class="banner-content">
              <div class="subtitle">Partners welcome</div>
              <h3 class="title">We are looking for partners</h3>
          </div>
          <a class="link-term-overlay" href="../members/index.html"></a>
      </div>
  </div></div></aside>
       <aside id="gva-recent-posts-3" class="widget clearfix gva_widget_recent_entries">
        <h3 class="widget-title"><span>Recent Posts</span></h3>
        <ul>
                                   <li>
                 <div class="post-list-item has-thumbnail">
                                         <div class="post-thumbnail">
                          <a href="../how-to-choose-the-perfect-planner/index.html">
                             <img width="180" height="180" src="../wp-content/uploads/2020/12/post-1-180x180.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="https://www.gavias-theme.com/wp/tolips/wp-content/uploads/2020/12/post-1-180x180.jpg 180w, https://www.gavias-theme.com/wp/tolips/wp-content/uploads/2020/12/post-1-600x600.jpg 600w" sizes="(max-width: 180px) 100vw, 180px" />                        </a>
                       </div>

                    <div class="post-content">
                       <span class="post-comments"><i class="icon far fa-comments"></i>0 Comments</span>                     <h3 class="post-title"><a href="../how-to-choose-the-perfect-planner/index.html">How to Choose the Perfect Planner</a></h3>
                                         </div>
                 </div>
              </li>
                                   <li>
                 <div class="post-list-item has-thumbnail">
                                         <div class="post-thumbnail">
                          <a href="../10-tips-and-tricks-for-home-buyers/index.html">
                             <img width="180" height="180" src="../wp-content/uploads/2020/12/post-2-180x180.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" loading="lazy" srcset="https://www.gavias-theme.com/wp/tolips/wp-content/uploads/2020/12/post-2-180x180.jpg 180w, https://www.gavias-theme.com/wp/tolips/wp-content/uploads/2020/12/post-2-600x600.jpg 600w" sizes="(max-width: 180px) 100vw, 180px" />                        </a>
                       </div>

                    <div class="post-content">
                       <span class="post-comments"><i class="icon far fa-comments"></i>0 Comments</span>                     <h3 class="post-title"><a href="../10-tips-and-tricks-for-home-buyers/index.html">10 Tips And Tricks for Home Buyers</a></h3>
                                         </div>
                 </div>
              </li>
                                   <li>
                 <div class="post-list-item has-thumbnail">
                                         <div class="post-thumbnail">
                          <a href="../20-stylish-dining-room-storage-ideas/index.html">
                             <img width="180" height="180" src="../wp-content/uploads/2020/12/post-3-180x180.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" loading="lazy" srcset="https://www.gavias-theme.com/wp/tolips/wp-content/uploads/2020/12/post-3-180x180.jpg 180w, https://www.gavias-theme.com/wp/tolips/wp-content/uploads/2020/12/post-3-600x600.jpg 600w" sizes="(max-width: 180px) 100vw, 180px" />                        </a>
                       </div>

                    <div class="post-content">
                       <span class="post-comments"><i class="icon far fa-comments"></i>0 Comments</span>                     <h3 class="post-title"><a href="../20-stylish-dining-room-storage-ideas/index.html">20 Stylish Dining Room Storage Ideas</a></h3>
                                         </div>
                 </div>
              </li>
                 </ul>

        </aside></div></div></div></div></div><a class="control-filter-sidebar-mobile"><i class="icon las la-sliders-h"></i></a></div>
  </div>
      </div>
  </div>
      </div>




          <div class="link-pages"></div>
          <div class="comment-page-wrapper clearfix">
                      </div>

      </div>

                </div>
              </div>

              <!-- Left sidebar -->

              <!-- Right Sidebar -->

          </div>
                </div>
      </div>

    </div>

@endsection
