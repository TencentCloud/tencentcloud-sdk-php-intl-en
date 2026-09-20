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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateAMLOngoingScreeningStatus request structure.
 *
 * @method string getUniqueCustomerID() Obtain End user's unique identifier in the customer system, up to 256 characters.
 * @method void setUniqueCustomerID(string $UniqueCustomerID) Set End user's unique identifier in the customer system, up to 256 characters.
 * @method boolean getEnableOngoingScreening() Obtain Whether continuous monitoring screening is enabled. 
Default value: false.
 * @method void setEnableOngoingScreening(boolean $EnableOngoingScreening) Set Whether continuous monitoring screening is enabled. 
Default value: false.
 */
class UpdateAMLOngoingScreeningStatusRequest extends AbstractModel
{
    /**
     * @var string End user's unique identifier in the customer system, up to 256 characters.
     */
    public $UniqueCustomerID;

    /**
     * @var boolean Whether continuous monitoring screening is enabled. 
Default value: false.
     */
    public $EnableOngoingScreening;

    /**
     * @param string $UniqueCustomerID End user's unique identifier in the customer system, up to 256 characters.
     * @param boolean $EnableOngoingScreening Whether continuous monitoring screening is enabled. 
Default value: false.
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
        if (array_key_exists("UniqueCustomerID",$param) and $param["UniqueCustomerID"] !== null) {
            $this->UniqueCustomerID = $param["UniqueCustomerID"];
        }

        if (array_key_exists("EnableOngoingScreening",$param) and $param["EnableOngoingScreening"] !== null) {
            $this->EnableOngoingScreening = $param["EnableOngoingScreening"];
        }
    }
}
