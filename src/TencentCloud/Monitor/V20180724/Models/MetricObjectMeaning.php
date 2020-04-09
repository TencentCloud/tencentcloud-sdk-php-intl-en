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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Meaning of metric data
 *
 * @method string getEn() Obtain Meaning of the metric in English
 * @method void setEn(string $En) Set Meaning of the metric in English
 * @method string getZh() Obtain Meaning of the metric in Chinese
 * @method void setZh(string $Zh) Set Meaning of the metric in Chinese
 */
class MetricObjectMeaning extends AbstractModel
{
    /**
     * @var string Meaning of the metric in English
     */
    public $En;

    /**
     * @var string Meaning of the metric in Chinese
     */
    public $Zh;

    /**
     * @param string $En Meaning of the metric in English
     * @param string $Zh Meaning of the metric in Chinese
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
        if (array_key_exists("En",$param) and $param["En"] !== null) {
            $this->En = $param["En"];
        }

        if (array_key_exists("Zh",$param) and $param["Zh"] !== null) {
            $this->Zh = $param["Zh"];
        }
    }
}
