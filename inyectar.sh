#!/bin/sh
psql -h localhost -d biblioteca -U biblioteca < comunes/biblioteca.sql
