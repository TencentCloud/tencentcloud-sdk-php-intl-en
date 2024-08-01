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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAdvancedStoreLocation request structure.
 *
 * @method string getStoreLocation() Obtain COS path for saving querying results
 * @method void setStoreLocation(string $StoreLocation) Set COS path for saving querying results
 * @method integer getEnable() Obtain Whether to enable advanced settings. 0 means no while 1 means yes.
 * @method void setEnable(integer $Enable) Set Whether to enable advanced settings. 0 means no while 1 means yes.
 */
class ModifyAdvancedStoreLocationRequest extends AbstractModel
{
    /**
     * @var string COS path for saving querying results
     */
    public $StoreLocation;

    /**
     * @var integer Whether to enable advanced settings. 0 means no while 1 means yes.
     */
    public $Enable;

    /**
     * @param string $StoreLocation COS path for saving querying results
     * @param integer $Enable Whether to enable advanced settings. 0 means no while 1 means yes.
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
        if (array_key_exists("StoreLocation",$param) and $param["StoreLocation"] !== null) {
            $this->StoreLocation = $param["StoreLocation"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
