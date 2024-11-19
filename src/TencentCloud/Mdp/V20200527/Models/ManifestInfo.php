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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Linear assembly channel configuration.
 *
 * @method integer getWindows() Obtain Time window, in seconds.
 * @method void setWindows(integer $Windows) Set Time window, in seconds.
 * @method string getAdMarkupType() Obtain Enter the format of the output advertising tag. Optional values are: Date Range and Enhanced SCTE-35.
 * @method void setAdMarkupType(string $AdMarkupType) Set Enter the format of the output advertising tag. Optional values are: Date Range and Enhanced SCTE-35.
 */
class ManifestInfo extends AbstractModel
{
    /**
     * @var integer Time window, in seconds.
     */
    public $Windows;

    /**
     * @var string Enter the format of the output advertising tag. Optional values are: Date Range and Enhanced SCTE-35.
     */
    public $AdMarkupType;

    /**
     * @param integer $Windows Time window, in seconds.
     * @param string $AdMarkupType Enter the format of the output advertising tag. Optional values are: Date Range and Enhanced SCTE-35.
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
        if (array_key_exists("Windows",$param) and $param["Windows"] !== null) {
            $this->Windows = $param["Windows"];
        }

        if (array_key_exists("AdMarkupType",$param) and $param["AdMarkupType"] !== null) {
            $this->AdMarkupType = $param["AdMarkupType"];
        }
    }
}
