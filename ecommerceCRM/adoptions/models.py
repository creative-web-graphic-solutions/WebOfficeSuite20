from django.db import models
from datetime import datetime
from datetime import date
from django.db.transaction import atomic, rollback
from django.db.models import Sum, Func
from django.db.models.functions import TruncMonth
from django.db.models.functions import Cast
from django.db.models import Count, CharField, IntegerField
import matplotlib.pyplot as plt
from IPython.display import display, Markdown, clear_output
# widget packages
from rest_framework import serializers
import datetime
import matplotlib.pyplot as plt
import seaborn as sns
import ipywidgets as widgets
import numpy as np

PAYMENT_CHOICES = (
('Paid', 'Paid'),
('Unpaid', 'Unpaid')
   )



class Amazoninv(models.Model):
   SKU = models.IntegerField()
   Description = models.CharField(max_length=300)
   BanggoodID = models.IntegerField()
   Website = models.CharField(max_length = 250)
   StockInfo = models.CharField(max_length = 200)
   Qty = models.IntegerField()
   Cost = models.IntegerField()
   promotion_enddate = models.DateTimeField(null=True, blank=True)
   reorder = models.IntegerField()
   
   def __str__(self):
      return self.Description

class  Invoicetracker(models.Model):
   TotalBillAmount = 0
   invoicenumber = models.IntegerField()
   invoicedate = models.DateTimeField()
   BillAmount = models.IntegerField()
   TotalPaid = models.IntegerField()
   Remark = models.CharField(max_length=100)

   def __int__(self):
      return self.invoicenumber

   @classmethod
   def totalbill(cls):
         
      total = Invoicetracker.objects.all().aggregate( TotalBillAmount = Sum('BillAmount'))
      return total
   #    Invoice = Invoicetracker.objects.all()
                     
   #    months = Invoicetracker.objects.annotate(month=TruncMonth('invoicedate')).values('month').annotate(total_price=Sum('BillAmount'))

   #    text = widgets.Text(
   # value='My Text',
   # description='Title', )
   # calendar = widgets.DatePicker(
   # description='Select Date')
   # slider = widgets.FloatSlider(
   # value=1,
   # min=0,
   # max=10.0,
   # step=0.1,)
   # menu = widgets.Dropdown(
   # options=['red', 'blue', 'green'],
   # value='red',
   # description='Color:')
   # checkbox = widgets.Checkbox(
   # description='Check to invert',)     
   # button = widgets.Button(description='My Button')
   # button

   # checkbox
   # box = widgets.VBox([text, slider, menu, calendar, checkbox ])
   # box
   # plt.plot([1,2,3], color = menu.value)
   # plt.title('A {} line'.format(menu.value))
   # plt.show()
   # box
           
   # categorical_1 = ['A', 'B', 'C', 'D']
   # colors        = ['green', 'red', 'blue', 'orange']
   # numerical = [[6, 9, 2, 7],
   # [6, 7, 3, 8],
   # [9, 11, 13, 15],
   # [3, 5, 9, 6]]
   # number_groups = len(categorical_1) 
   # bin_width = 1.0/(number_groups+1)
   # fig, ax = plt.subplots(figsize=(6,6))
   # for i in range(number_groups):
   #    ax.bar(x=np.arange(len(categorical_1)) + i*bin_width, 
   #    height=numerical[i],
   #    width=bin_width,
   #    color=colors[i],
   #    align='center')
   #    ax.set_xticks(np.arange(len(categorical_1)) + number_groups/(2*(number_groups+1)))
   # # number_groups/(2*(number_groups+1)): offset of xticklabel
   #    ax.set_xticklabels(categorical_1)
   #    ax.legend(categorical_1, facecolor='w')
   #    plt.show()  

   #    return months


   
   @classmethod
   def totalpaid(cls):
         total = Invoicetracker.objects.all().aggregate(TotalPaid  = Sum('TotalPaid'))
         return total

# class Month(Func):
#       function = 'EXTRACT'
#       template = '%(function)s(MONTH from %(expression)s)'
#       output_field = models.IntegerField()

# class MonthSqlite(Func):
#     function = 'STRFTIME'
#     template = '%(function)s("%%m", %(expressions)s)'
#     output_field = models.CharField()

# def test():
#    TESTDATA = [
#         (7, 300),
#         (7, 200),
#         (3, 100),
#         (4, 500),
#         (1, 100),
#          ]

# with atomic():
#       for m, total in TESTDATA:
#             Invoictracker(datetime=now().replace(day=1, month=m), total=total).save()      

#             summary = (Invoicetracker.objects
#                .annotate(m=Month('date'))
#                .values('m')
#                .annotate(total=sum('TotalPaid'))
#                .order_by())

#             for result in summary:
#                print (result)

# raise Exception('stop')
      
               
class Payment(models.Model):
   statementperiod = models.DateField(default = date.today())
   paymentdate = models.DateField(default = date.today() )
   paymentamount = models.IntegerField()
   paymentmethod = models.CharField(max_length=100 )
   Status = models.CharField(max_length = 250, default = 'paid', choices = PAYMENT_CHOICES)
   Paynote = models.CharField(max_length = 250, null = True, blank = True)

   def __str(self):
      return Payment.statementperiod


   @classmethod
   def totalpayment(cls):
           # total = Payment.objects.aggregate(TotalPaymentAmount  = Sum('paymentamount'))
      
      totpay = Payment.objects.annotate(month=TruncMonth('paymentdate')).values('month').annotate(total_payment=Sum('paymentamount'))
         
      return totpay[0],totpay[1],totpay[2],totpay[3],totpay[4],totpay[5]


      # @classmethod
      # def totalpayment(cls):
      #    total = Payment.objects.annotate(month=TruncMonth('paymentdate').values('month').annotate(total_payment=Sum('paymentamount'))
      #    return total   
         # today = datetime.date.today()
         
            # data = list(Payments.extra(select={'date':"to_char(<DATABASENAME>_<TableName>.created_at, 'YYYY-MM-DD hh:mi AM')"}).values_list('date', flat='true')
            # total = Payment.objects.annotate(month=TruncMonth('paymentdate')).filter(month=YOURVALUE).values('month').distinct()
         
            

   

      

     
