//создадим проверку формы
function validateForm()
{
	var form_object = document.forms.meeting;
	var number = document.forms.meeting.elements.number.value;

	if(form_object.elements.FIO.value == '')
	{
    	alert('Вы должны ввести свои ФИО!');
	    return false;
	}
    if(form_object.elements.number.value == '')
    {
        alert('Вы должны ввести свой номер!');
        return false;
    }
    if (form_object.elements.email.value == '') 
    {
        alert('Вы должны ввести свой e-mail!');
        return false; 
    }
    if(form_object.elements.datetime.value == '')
    {
        alert('Вы должны ввести дату!');
        return false;
    }
}