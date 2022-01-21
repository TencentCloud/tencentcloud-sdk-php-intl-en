<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ServiceConfig information
 *
 * @method string getProduct() Obtain Backend type, which takes effect when VPC is enabled. Valid values: `clb` and `upstream` (VPC channel)
 * @method void setProduct(string $Product) Set Backend type, which takes effect when VPC is enabled. Valid values: `clb` and `upstream` (VPC channel)
 * @method string getUniqVpcId() Obtain Unique VPC ID.
 * @method void setUniqVpcId(string $UniqVpcId) Set Unique VPC ID.
 * @method string getUrl() Obtain API backend service URL, which is required if `ServiceType` is `HTTP`.
 * @method void setUrl(string $Url) Set API backend service URL, which is required if `ServiceType` is `HTTP`.
 * @method string getPath() Obtain API backend service path, such as `/path`, which is required if `ServiceType` is `HTTP`. The frontend and backend paths can be different.
 * @method void setPath(string $Path) Set API backend service path, such as `/path`, which is required if `ServiceType` is `HTTP`. The frontend and backend paths can be different.
 * @method string getMethod() Obtain API backend service request method, such as `GET`, which is required if `ServiceType` is `HTTP`. The frontend and backend methods can be different
 * @method void setMethod(string $Method) Set API backend service request method, such as `GET`, which is required if `ServiceType` is `HTTP`. The frontend and backend methods can be different
 * @method CosConfig getCosConfig() Obtain API backend COS configuration. It’s required if the `ServiceType` is ·`COS`.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setCosConfig(CosConfig $CosConfig) Set API backend COS configuration. It’s required if the `ServiceType` is ·`COS`.
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class ServiceConfig extends AbstractModel
{
    /**
     * @var string Backend type, which takes effect when VPC is enabled. Valid values: `clb` and `upstream` (VPC channel)
     */
    public $Product;

    /**
     * @var string Unique VPC ID.
     */
    public $UniqVpcId;

    /**
     * @var string API backend service URL, which is required if `ServiceType` is `HTTP`.
     */
    public $Url;

    /**
     * @var string API backend service path, such as `/path`, which is required if `ServiceType` is `HTTP`. The frontend and backend paths can be different.
     */
    public $Path;

    /**
     * @var string API backend service request method, such as `GET`, which is required if `ServiceType` is `HTTP`. The frontend and backend methods can be different
     */
    public $Method;

    /**
     * @var CosConfig API backend COS configuration. It’s required if the `ServiceType` is ·`COS`.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $CosConfig;

    /**
     * @param string $Product Backend type, which takes effect when VPC is enabled. Valid values: `clb` and `upstream` (VPC channel)
     * @param string $UniqVpcId Unique VPC ID.
     * @param string $Url API backend service URL, which is required if `ServiceType` is `HTTP`.
     * @param string $Path API backend service path, such as `/path`, which is required if `ServiceType` is `HTTP`. The frontend and backend paths can be different.
     * @param string $Method API backend service request method, such as `GET`, which is required if `ServiceType` is `HTTP`. The frontend and backend methods can be different
     * @param CosConfig $CosConfig API backend COS configuration. It’s required if the `ServiceType` is ·`COS`.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("CosConfig",$param) and $param["CosConfig"] !== null) {
            $this->CosConfig = new CosConfig();
            $this->CosConfig->deserialize($param["CosConfig"]);
        }
    }
}
