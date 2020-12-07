


var ServiceCategory=["Education","Marketing","Medicine","Sales","cleaning"];
var ServiceName=["Python Certification","food Marketing","Healthcare-Facility","Shoe Saler","House cleaning"];
var ServicePrising=["ksh 5000","ks 400","ksh 7000","ksh 200","ksh 500"];
var ServicePhoneNumber=["075421454213"];
var ServiceEmailAddress=[];
var ServiceDescription=[];

var serviceDetails=[
    ServiceCategory,
    ServiceName,
    ServicePrising,
    ServicePhoneNumber,
    ServiceEmailAddress,
    ServiceDescription
];




function initializeTableRows()
{
var newRow;
var data;
var table=document.getElementById("services");

for(var servicesNumber=0;servicesNumber<=ServiceCategory.length;servicesNumber++)
{
      
    var serviceDetail=[
    ServiceCategory[servicesNumber],
    ServiceName[servicesNumber],
    ServicePrising[servicesNumber],
    ServicePhoneNumber[servicesNumber],
    ServiceEmailAddress[servicesNumber],
    ServiceDescription[servicesNumber]
];

      newRow=document.createElement("tr");
    
      for(var item=0;item<serviceDetail.length;item++)
      {
      newTableData=document.createElement("td");
      data=document.createTextNode(serviceDetail[item]);
      newTableData.appendChild(data);
      newRow.appendChild(newTableData);
      table.appendChild(newRow);
      }
    
}




}