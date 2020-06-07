var visible;

var totalElements;

var i;

var speed=500;

function hideAllButZero(total)
{
  for(i=1; i<total; i++)
  {
    workon="#"+"sud"+i;
    $(workon).hide(0);
  }
  workon="#"+"sud"+"0";
  $(workon).show(0);
  visible=0;
  totalElements=total;
}

function showit(num)
{
  if(visible!=num)
  {
    showtable="#"+"sud"+num;
    $(showtable).show(speed);
    hidetable="#"+"sud"+visible;
    $(hidetable).hide(speed);
    visible=num;
  }
  $("#showAll").show();
  $("#hideAll").show();
}

function showAll()
{
  for(i=0; i<totalElements; i++)
  {
    workon="#"+"sud"+i;
    $(workon).show(speed);
  }
  $("#showAll").hide();
  $("#hideAll").show();
  visible=-1;
}

function hideAll()
{
  for(i=0; i<totalElements; i++)
  {
    workon="#"+"sud"+i;
    $(workon).hide(speed);
  }
  $("#showAll").show();
  $("#hideAll").hide();
  visible=-1;
}