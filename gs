function doGet(e)
{
  var sheet = SpreadsheetApp.openById("17DcMH6LTOYivG8h7T3GFvxW5o5jNidRQe7UEpmkM4ls");
  var n=sheet.getRange("D1").getValue()+2;
  sheet.getRange("A1").setValue("Имя");
  sheet.getRange("B1").setValue("Фамилия");
  sheet.getRange("C1").setValue("Возраст");
  sheet.getRange("A"+n).setValue(e.parameter.nameG);
  sheet.getRange("B"+n).setValue(e.parameter.surnameG);
  sheet.getRange("C"+n).setValue(e.parameter.ageG);
  sheet.getRange("D1").setValue(n-1);
 }
