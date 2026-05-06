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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * microservice gateway selector
 *
 * @method string getNamespace() Obtain Namespace
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNamespace(string $Namespace) Set Namespace
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getService() Obtain Service.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setService(string $Service) Set Service.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getLabels() Obtain Instance tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLabels(array $Labels) Set Instance tag
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ServiceGatewaySelector extends AbstractModel
{
    /**
     * @var string Namespace
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Namespace;

    /**
     * @var string Service.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Service;

    /**
     * @var array Instance tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Labels;

    /**
     * @param string $Namespace Namespace
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Service Service.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Labels Instance tag
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }
    }
}
