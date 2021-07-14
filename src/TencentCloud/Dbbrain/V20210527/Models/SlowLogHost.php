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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of slow log source addresses.
 *
 * @method string getUserHost() Obtain Source addresses.
 * @method void setUserHost(string $UserHost) Set Source addresses.
 * @method float getRatio() Obtain Proportion (in %) of slow logs from this source address to the total number of slow logs.
 * @method void setRatio(float $Ratio) Set Proportion (in %) of slow logs from this source address to the total number of slow logs.
 * @method integer getCount() Obtain Number of slow logs from this source address.
 * @method void setCount(integer $Count) Set Number of slow logs from this source address.
 */
class SlowLogHost extends AbstractModel
{
    /**
     * @var string Source addresses.
     */
    public $UserHost;

    /**
     * @var float Proportion (in %) of slow logs from this source address to the total number of slow logs.
     */
    public $Ratio;

    /**
     * @var integer Number of slow logs from this source address.
     */
    public $Count;

    /**
     * @param string $UserHost Source addresses.
     * @param float $Ratio Proportion (in %) of slow logs from this source address to the total number of slow logs.
     * @param integer $Count Number of slow logs from this source address.
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
        if (array_key_exists("UserHost",$param) and $param["UserHost"] !== null) {
            $this->UserHost = $param["UserHost"];
        }

        if (array_key_exists("Ratio",$param) and $param["Ratio"] !== null) {
            $this->Ratio = $param["Ratio"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
