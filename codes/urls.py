from django.urls import path

from . import views
urlpatterns = [
    path('login/register/', views.register, name='register'),
    path('login/register/login', views.login, name='login'),
    path('enquiry/', views.enquiry, name='enquiry'),
    path('login/', views.login, name='login'),
    path('', views.home, name='home-page'),

]