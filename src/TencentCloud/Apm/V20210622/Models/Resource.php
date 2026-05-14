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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource layer information.
 *
 * @method array getType() Obtain Resource type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(array $Type) Set Resource type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTKEMeta() Obtain TKE resource layer information.
 * @method void setTKEMeta(array $TKEMeta) Set TKE resource layer information.
 * @method array getCVMMeta() Obtain CVM resource information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCVMMeta(array $CVMMeta) Set CVM resource information.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Resource extends AbstractModel
{
    /**
     * @var array Resource type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var array TKE resource layer information.
     */
    public $TKEMeta;

    /**
     * @var array CVM resource information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CVMMeta;

    /**
     * @param array $Type Resource type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TKEMeta TKE resource layer information.
     * @param array $CVMMeta CVM resource information.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TKEMeta",$param) and $param["TKEMeta"] !== null) {
            $this->TKEMeta = [];
            foreach ($param["TKEMeta"] as $key => $value){
                $obj = new TkeMeta();
                $obj->deserialize($value);
                array_push($this->TKEMeta, $obj);
            }
        }

        if (array_key_exists("CVMMeta",$param) and $param["CVMMeta"] !== null) {
            $this->CVMMeta = [];
            foreach ($param["CVMMeta"] as $key => $value){
                $obj = new CVMMeta();
                $obj->deserialize($value);
                array_push($this->CVMMeta, $obj);
            }
        }
    }
}
