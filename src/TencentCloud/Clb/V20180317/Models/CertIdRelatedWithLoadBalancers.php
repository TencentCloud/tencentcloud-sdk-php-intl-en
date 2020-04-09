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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Certificate ID and list of CLB instances associated with it
 *
 * @method string getCertId() Obtain Certificate ID
 * @method void setCertId(string $CertId) Set Certificate ID
 * @method array getLoadBalancers() Obtain List of CLB instances associated with certificate
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLoadBalancers(array $LoadBalancers) Set List of CLB instances associated with certificate
Note: this field may return null, indicating that no valid values can be obtained.
 */
class CertIdRelatedWithLoadBalancers extends AbstractModel
{
    /**
     * @var string Certificate ID
     */
    public $CertId;

    /**
     * @var array List of CLB instances associated with certificate
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LoadBalancers;

    /**
     * @param string $CertId Certificate ID
     * @param array $LoadBalancers List of CLB instances associated with certificate
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("LoadBalancers",$param) and $param["LoadBalancers"] !== null) {
            $this->LoadBalancers = [];
            foreach ($param["LoadBalancers"] as $key => $value){
                $obj = new LoadBalancer();
                $obj->deserialize($value);
                array_push($this->LoadBalancers, $obj);
            }
        }
    }
}
