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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Query domain name data that can be bound to clusters
 *
 * @method string getLabel() Obtain Service node description
 * @method void setLabel(string $Label) Set Service node description
 * @method string getValue() Obtain Service node ID (the ClusterId required in other APIs)
 * @method void setValue(string $Value) Set Service node ID (the ClusterId required in other APIs)
 * @method string getRegion() Obtain Region information
 * @method void setRegion(string $Region) Set Region information
 */
class DescribeDomainRegionData extends AbstractModel
{
    /**
     * @var string Service node description
     */
    public $Label;

    /**
     * @var string Service node ID (the ClusterId required in other APIs)
     */
    public $Value;

    /**
     * @var string Region information
     */
    public $Region;

    /**
     * @param string $Label Service node description
     * @param string $Value Service node ID (the ClusterId required in other APIs)
     * @param string $Region Region information
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
