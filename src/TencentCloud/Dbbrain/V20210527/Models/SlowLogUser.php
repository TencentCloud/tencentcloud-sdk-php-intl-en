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
 * Details of the source users of slow logs
 *
 * @method string getUserName() Obtain Source username
 * @method void setUserName(string $UserName) Set Source username
 * @method float getRatio() Obtain Percentage of the number of slow logs from this source username to the total number of slow logs
 * @method void setRatio(float $Ratio) Set Percentage of the number of slow logs from this source username to the total number of slow logs
 * @method integer getCount() Obtain Number of slow logs from this source username
 * @method void setCount(integer $Count) Set Number of slow logs from this source username
 */
class SlowLogUser extends AbstractModel
{
    /**
     * @var string Source username
     */
    public $UserName;

    /**
     * @var float Percentage of the number of slow logs from this source username to the total number of slow logs
     */
    public $Ratio;

    /**
     * @var integer Number of slow logs from this source username
     */
    public $Count;

    /**
     * @param string $UserName Source username
     * @param float $Ratio Percentage of the number of slow logs from this source username to the total number of slow logs
     * @param integer $Count Number of slow logs from this source username
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Ratio",$param) and $param["Ratio"] !== null) {
            $this->Ratio = $param["Ratio"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
