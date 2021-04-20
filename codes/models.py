from django.db import models
from django.db.models import CharField


class Trains(models.Model):
    trainname=models.CharField(max_length=100)
    trainId=models.IntegerField()
    def __str__(self):
        return self.trainname
class details(models.Model):
    shedule=models.ForeignKey(Trains, on_delete=models.CASCADE)
    sch=models.CharField(max_length=10)
    et=models.TimeField()
    def __str__(self):
        return self.sch


