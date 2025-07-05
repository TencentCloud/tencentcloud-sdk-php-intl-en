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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application usage details of knowledge library capacity.
 *
 * @method string getAppName() Obtain Application name.
 * @method void setAppName(string $AppName) Set Application name.
 * @method string getUsedCharSize() Obtain Number of used characters.
 * @method void setUsedCharSize(string $UsedCharSize) Set Number of used characters.
 * @method float getProportion() Obtain Usage proportion.
 * @method void setProportion(float $Proportion) Set Usage proportion.
 * @method string getExceedCharSize() Obtain Exceeding character count.
 * @method void setExceedCharSize(string $ExceedCharSize) Set Exceeding character count.
 */
class KnowledgeDetail extends AbstractModel
{
    /**
     * @var string Application name.
     */
    public $AppName;

    /**
     * @var string Number of used characters.
     */
    public $UsedCharSize;

    /**
     * @var float Usage proportion.
     */
    public $Proportion;

    /**
     * @var string Exceeding character count.
     */
    public $ExceedCharSize;

    /**
     * @param string $AppName Application name.
     * @param string $UsedCharSize Number of used characters.
     * @param float $Proportion Usage proportion.
     * @param string $ExceedCharSize Exceeding character count.
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
        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("UsedCharSize",$param) and $param["UsedCharSize"] !== null) {
            $this->UsedCharSize = $param["UsedCharSize"];
        }

        if (array_key_exists("Proportion",$param) and $param["Proportion"] !== null) {
            $this->Proportion = $param["Proportion"];
        }

        if (array_key_exists("ExceedCharSize",$param) and $param["ExceedCharSize"] !== null) {
            $this->ExceedCharSize = $param["ExceedCharSize"];
        }
    }
}
