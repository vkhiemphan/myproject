<?php 
function UPCP_Version_Reversion() {
	global $wpdb;
	global $tags_table_name, $fields_table_name;

	if (get_option("UPCP_Trial_Happening") != "Yes" or time() < get_option("UPCP_Trial_Expiry_Time")) {return;}

	$wpdb->query("TRUNCATE $fields_table_name");
	$wpdb->query("TRUNCATE $tags_table_name");

	update_option("UPCP_Product_Comparison", "No");
	update_option("UPCP_Product_Inquiry_Form", "No");
	update_option("UPCP_Product_Inquiry_Cart", "No");
	update_option("UPCP_Product_Reviews", "No");
	update_option("UPCP_Catalog_Display_Reviews", "No");
	update_option("UPCP_Lightbox", "No");
	update_option("UPCP_Lightbox_Mode", "No");
	update_option("UPCP_Hidden_Drop_Down_Sidebar_On_Mobile", "No");
	update_option("UPCP_Infinite_Scroll", "No");
	update_option("UPCP_Products_Per_Page", 1000000);
	update_option("UPCP_Pagination_Location", "Top");
	update_option("UPCP_CF_Conversion", "No");
	update_option("UPCP_Access_Role", "administrator");
	update_option("UPCP_PP_Grid_Width", 90);
	update_option("UPCP_PP_Grid_Height", 35);
	update_option("UPCP_Top_Bottom_Padding", 10);
	update_option("UPCP_Left_Right_Padding", 10);

	update_option("UPCP_WooCommerce_Sync", "No");
	update_option("UPCP_WooCommerce_Show_Cart_Count", "No");
	update_option("UPCP_WooCommerce_Checkout", "No");
	update_option("UPCP_WooCommerce_Cart_Page", "Checkout");
	update_option("UPCP_WooCommerce_Product_Page", "No");

	update_option("UPCP_SEO_Option", "None");
	update_option("UPCP_SEO_Integration", "Add");
	update_option("UPCP_SEO_Title", "[page-title] |[product-name]");
	update_option("UPCP_Update_Breadcrumbs", "No");

	update_option("UPCP_Categories_Label", "");
	update_option("UPCP_SubCategories_Label", "");
	update_option("UPCP_Tags_Label", "");
	update_option("UPCP_Custom_Fields_Label", "");
	update_option("UPCP_Details_Label", "");
	update_option("UPCP_Sort_By_Label", "");
	update_option("UPCP_Price_Ascending_Label", "");
	update_option("UPCP_Price_Descending_Label", "");
	update_option("UPCP_Name_Ascending_Label", "");
	update_option("UPCP_Name_Descending_Label", "");
	update_option("UPCP_Product_Name_Search_Label", "");
	update_option("UPCP_Product_Name_Text_Label", "");
	update_option("UPCP_Back_To_Catalogue_Label", "");
	update_option("UPCP_Updating_Results_Label", "");
	update_option("UPCP_No_Results_Found_Label", "");
	update_option("UPCP_Products_Pagination_Label", "");
	update_option("UPCP_Read_More_Label", "");
	update_option("UPCP_Product_Details_Label", "");
	update_option("UPCP_Additional_Info_Label", "");
	update_option("UPCP_Contact_Us_Label", "");
	update_option("UPCP_Product_Inquiry_Form_Title_Label", "");
	update_option("UPCP_Customer_Reviews_Tab_Label", "");
	update_option("UPCP_Related_Products_Label", "");
	update_option("UPCP_Next_Product_Label", "");
	update_option("UPCP_Previous_Product_Label", "");
	update_option("UPCP_Of_Pagination_Label", "");
	update_option("UPCP_Inquire_Button_Label", "");
	update_option("UPCP_Add_To_Cart_Button_Label", "");
	update_option("UPCP_Send_Inquiry_Label", "");
	update_option("UPCP_Checkout_Label", "");
	update_option("UPCP_Empty_Cart_Label", "");
	update_option("UPCP_Additional_Info_Category_Label", "");
	update_option("UPCP_Additional_Info_SubCategory_Label", "");
	update_option("UPCP_Additional_Info_Tags_Label", "");

	update_option("UPCP_Catalogue_Style", "");
	update_option("UPCP_Category_Heading_Style", "");
	update_option("UPCP_Compare_Button_Background_Color", "");
	update_option("UPCP_Compare_Button_Text_Color", "");
	update_option("UPCP_Compare_Button_Clicked_Background_Color", "");
	update_option("UPCP_Compare_Button_Clicked_Text_Color", "");
	update_option("UPCP_Compare_Button_Font_Size", "");
	update_option("UPCP_Sale_Button_Background_Color", "");
	update_option("UPCP_Sale_Button_Text_Color", "");
	update_option("UPCP_Sale_Button_Font_Size", "");
	update_option("UPCP_Details_Icon_Type", "");
	update_option("UPCP_Details_Image", "");
	update_option("UPCP_Details_Icon_Color", "");
	update_option("UPCP_Details_Icon_Font_Size", "");
	update_option("UPCP_Details_Icon_Font_Selection", "");

	update_option("UPCP_Thumbnail_View_Image_Hover_Fade", "");
	update_option("UPCP_Thumbnail_View_Mouseover_Zoom", "");
	update_option("UPCP_Thumbnail_View_Image_Height", "");
	update_option("UPCP_Thumbnail_View_Image_Width", "");
	update_option("UPCP_Thumbnail_View_Image_Holder_Height", "");
	update_option("UPCP_Thumbnail_View_Image_Holder_Width", "");
	update_option("UPCP_Thumbnail_View_Image_Border", "");
	update_option("UPCP_Thumbnail_View_Image_Border_Color", "");
	update_option("UPCP_Thumbnail_View_Box_Width", "");
	update_option("UPCP_Thumbnail_View_Box_Min_Height", "");
	update_option("UPCP_Thumbnail_View_Box_Max_Height", "");
	update_option("UPCP_Thumbnail_View_Box_Padding", "");
	update_option("UPCP_Thumbnail_View_Box_Margin", "");
	update_option("UPCP_Thumbnail_View_Box_Border", "");
	update_option("UPCP_Thumbnail_View_Border_Color", "");
	update_option("UPCP_Thumbnail_View_Title_Font_Size", "");
	update_option("UPCP_Thumbnail_View_Title_Font", "");
	update_option("UPCP_Thumbnail_View_Title_Color", "");
	update_option("UPCP_Thumbnail_View_Price_Font", "");
	update_option("UPCP_Thumbnail_View_Price_Font_Size", "");
	update_option("UPCP_Thumbnail_View_Price_Color", "");
	update_option("UPCP_Thumbnail_View_Background_Color", "");
	update_option("UPCP_Thumbnail_View_Separator_Line", "");
	update_option("UPCP_Thumbnail_View_Details_Arrow", "");
	update_option("UPCP_Thumbnail_View_Custom_Details_Arrow", "");

	update_option("UPCP_List_View_Click_Action", "");
	update_option("UPCP_List_View_Image_Hover_Fade", "");
	update_option("UPCP_List_View_Mouseover_Zoom", "");
	update_option("UPCP_List_View_Image_Height", "");
	update_option("UPCP_List_View_Image_Width", "");
	update_option("UPCP_List_View_Image_Holder_Height", "");
	update_option("UPCP_List_View_Image_Border", "");
	update_option("UPCP_List_View_Image_Border_Color", "");
	update_option("UPCP_List_View_Image_Background_Color", "");
	update_option("UPCP_List_View_Item_Margin_Left", "");
	update_option("UPCP_List_View_Item_Margin_Top", "");
	update_option("UPCP_List_View_Item_Padding", "");
	update_option("UPCP_List_View_Item_Color", "");
	update_option("UPCP_List_View_Item_Min_Height", "");
	update_option("UPCP_List_View_Item_Max_Height", "");
	update_option("UPCP_List_View_Title_Font_Size", "");
	update_option("UPCP_List_View_Title_Color", "");
	update_option("UPCP_List_View_Title_Font", "");
	update_option("UPCP_List_View_Price_Font_Size", "");
	update_option("UPCP_List_View_Price_Color", "");
	update_option("UPCP_List_View_Price_Font", "");
	update_option("UPCP_List_View_Background_Color", "");
	update_option("UPCP_List_View_Details_Arrow", "");
	update_option("UPCP_List_View_Custom_Details_Arrow", "");

	update_option("UPCP_Detail_View_Image_Hover_Fade", "");
	update_option("UPCP_Detail_View_Mouseover_Zoom", "");
	update_option("UPCP_Detail_View_Image_Height", "");
	update_option("UPCP_Detail_View_Image_Width", "");
	update_option("UPCP_Detail_View_Image_Holder_Height", "");
	update_option("UPCP_Detail_View_Image_Holder_Width", "");
	update_option("UPCP_Detail_View_Image_Border", "");
	update_option("UPCP_Detail_View_Image_Border_Color", "");
	update_option("UPCP_Detail_View_Image_Background_Color", "");
	update_option("UPCP_Detail_View_Box_Width", "");
	update_option("UPCP_Detail_View_Box_Padding", "");
	update_option("UPCP_Detail_View_Box_Margin", "");
	update_option("UPCP_Detail_View_Box_Border", "");
	update_option("UPCP_Detail_View_Border_Color", "");
	update_option("UPCP_Detail_View_Title_Font_Size", "");
	update_option("UPCP_Detail_View_Title_Color", "");
	update_option("UPCP_Detail_View_Title_Font", "");
	update_option("UPCP_Detail_View_Price_Font_Size", "");
	update_option("UPCP_Detail_View_Price_Color", "");
	update_option("UPCP_Detail_View_Price_Font", "");
	update_option("UPCP_Detail_View_Zoom_On_Image_Hover", "");
	update_option("UPCP_Detail_View_Background_Color", "");
	update_option("UPCP_Detail_View_Separator_Line", "");
	update_option("UPCP_Detail_View_Details_Arrow", "");
	update_option("UPCP_Detail_View_Custom_Details_Arrow", "");

	update_option("UPCP_Sidebar_Title_Collapse", "");
	update_option("UPCP_Sidebar_Subcat_Collapse", "");
	update_option("UPCP_Sidebar_Start_Collapsed", "");
	update_option("UPCP_Sidebar_Title_Hover", "");
	update_option("UPCP_Sidebar_Checkbox_Style", "");
	update_option("UPCP_Custom_Fields_Show_Hide", "");
	update_option("UPCP_Categories_Control_Type", "");
	update_option("UPCP_SubCategories_Control_Type", "");
	update_option("UPCP_Tags_Control_Type", "");
	update_option("UPCP_Sidebar_Header_Font", "");
	update_option("UPCP_Sidebar_Header_Font_Size", "");
	update_option("UPCP_Sidebar_Header_Font_Weight", "");
	update_option("UPCP_Sidebar_Header_Color", "");
	update_option("UPCP_Sidebar_Subheader_Font", "");
	update_option("UPCP_Sidebar_Subheader_Font_Size", "");
	update_option("UPCP_Sidebar_Subheader_Font_Weight", "");
	update_option("UPCP_Sidebar_Subheader_Color", "");
	update_option("UPCP_Sidebar_Checkbox_Font", "");
	update_option("UPCP_Sidebar_Checkbox_Font_Size", "");
	update_option("UPCP_Sidebar_Checkbox_Font_Weight", "");
	update_option("UPCP_Sidebar_Checkbox_Color", "");

	update_option("UPCP_Full_Version", "No");
	update_option("UPCP_Trial_Happening", "No");
	delete_option("UPCP_Trial_Expiry_Time");
}
add_action('admin_init', 'UPCP_Version_Reversion');

?>