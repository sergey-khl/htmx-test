# syntax=docker/dockerfile:1
FROM node:latest

WORKDIR /webpack
RUN echo $(ls)
COPY . .

RUN npm install
RUN npm run build
