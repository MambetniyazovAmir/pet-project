FROM nginx:latest
LABEL authors="amirniyaz"

COPY hosts/mysite.local.conf /etc/nginx/conf.d/mysite.local.conf

WORKDIR /data

VOLUME /data

EXPOSE 3000

CMD ["nginx", "-g", "daemon off;"]

