var visible;

var totalElements;

var speed=500;

function hideAllButZero(total)
{
  for(i=1; i<total; i++)
  {
    workon="table."+"sud"+i;
    $(workon).hide(speed);
  }
  visible=0;
  totalElements=total;
}

function shoeTable(num)
{
  if(visible!=num)
  {
    showtable="table."+"sud"+num;
    $(showtable).show(speed);
    hidetable="table."+"sud"+visible;
    $(hidetable).hide(speed);
    visible=num;
  }
  else
  {
    hidetable="table."+"sud"+num;
    $(hidetable).hide(speed);
    visible=-1;
  }
  $("div#showAll").show();
  $("div#hideAll").show();
}


function showAll()
{
  for(i=0; i<totalElements; i++)
  {
    workon="table."+"sud"+i;
    $(workon).show(speed);
  }
  $("div#showAll").hide();
  $("div#hideAll").show();
  visible=-1;
}

function hideAll()
{
  for(i=0; i<totalElements; i++)
  {
    workon="table."+"sud"+i;
    $(workon).hide(speed);
  }
  $("div#showAll").show();
  $("div#hideAll").hide();
  visible=-1;
}