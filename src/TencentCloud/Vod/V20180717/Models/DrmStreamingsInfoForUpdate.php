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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method integer getSimpleAesDefinition() Obtain 
 * @method void setSimpleAesDefinition(integer $SimpleAesDefinition) Set 
 * @method integer getWidevineDefinition() Obtain 
 * @method void setWidevineDefinition(integer $WidevineDefinition) Set 
 * @method integer getFairPlayDefinition() Obtain 
 * @method void setFairPlayDefinition(integer $FairPlayDefinition) Set 
 */
class DrmStreamingsInfoForUpdate extends AbstractModel
{
    /**
     * @var integer 
     */
    public $SimpleAesDefinition;

    /**
     * @var integer 
     */
    public $WidevineDefinition;

    /**
     * @var integer 
     */
    public $FairPlayDefinition;

    /**
     * @param integer $SimpleAesDefinition 
     * @param integer $WidevineDefinition 
     * @param integer $FairPlayDefinition 
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
        if (array_key_exists("SimpleAesDefinition",$param) and $param["SimpleAesDefinition"] !== null) {
            $this->SimpleAesDefinition = $param["SimpleAesDefinition"];
        }

        if (array_key_exists("WidevineDefinition",$param) and $param["WidevineDefinition"] !== null) {
            $this->WidevineDefinition = $param["WidevineDefinition"];
        }

        if (array_key_exists("FairPlayDefinition",$param) and $param["FairPlayDefinition"] !== null) {
            $this->FairPlayDefinition = $param["FairPlayDefinition"];
        }
    }
}
