function codename() {
		
		if(document.formname.checkboxname.checked)
		{
		document.formname.textname.disabled=false;
		document.formname.categoryid.disabled=false;
		
		}

		else
		{
		document.formname.textname.disabled=true;
		document.formname.categoryid.disabled=true;
		
		}
		};
		
		function subcategoryname(){
		if(document.formname.checkboxname2.checked)
		{
		document.formname.subcategory2.disabled=false;
		document.formname.subcategoryid.disabled=false;
		}

		else
		{
		document.formname.subcategory2.disabled=true;
		document.formname.subcategoryid.disabled=true;
		}
		
		};