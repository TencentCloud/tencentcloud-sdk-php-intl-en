<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CloseAuditService request structure.
 *
 * @method string getProduct() Obtain Service type. Valid values: `dcdb` (TDSQL for MySQL), `mariadb` (TencentDB for MariaDB).
 * @method void setProduct(string $Product) Set Service type. Valid values: `dcdb` (TDSQL for MySQL), `mariadb` (TencentDB for MariaDB).
 * @method string getNodeRequestType() Obtain Use the value of `u200cProduct` for this parameter, such as `dcdb` and `mariadb`.
 * @method void setNodeRequestType(string $NodeRequestType) Set Use the value of `u200cProduct` for this parameter, such as `dcdb` and `mariadb`.
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 */
class CloseAuditServiceRequest extends AbstractModel
{
    /**
     * @var string Service type. Valid values: `dcdb` (TDSQL for MySQL), `mariadb` (TencentDB for MariaDB).
     */
    public $Product;

    /**
     * @var string Use the value of `u200cProduct` for this parameter, such as `dcdb` and `mariadb`.
     */
    public $NodeRequestType;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @param string $Product Service type. Valid values: `dcdb` (TDSQL for MySQL), `mariadb` (TencentDB for MariaDB).
     * @param string $NodeRequestType Use the value of `u200cProduct` for this parameter, such as `dcdb` and `mariadb`.
     * @param string $InstanceId Instance ID
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

        if (array_key_exists("NodeRequestType",$param) and $param["NodeRequestType"] !== null) {
            $this->NodeRequestType = $param["NodeRequestType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
