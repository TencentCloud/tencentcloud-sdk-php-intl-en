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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeScores request structure.
 *
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method integer getID() Obtain Project ID
 * @method void setID(integer $ID) Set Project ID
 * @method integer getIsDemo() Obtain This parameter has been disused.
 * @method void setIsDemo(integer $IsDemo) Set This parameter has been disused.
 */
class DescribeScoresRequest extends AbstractModel
{
    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var integer Project ID
     */
    public $ID;

    /**
     * @var integer This parameter has been disused.
     */
    public $IsDemo;

    /**
     * @param string $EndTime End time
     * @param string $StartTime Start time
     * @param integer $ID Project ID
     * @param integer $IsDemo This parameter has been disused.
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
        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("IsDemo",$param) and $param["IsDemo"] !== null) {
            $this->IsDemo = $param["IsDemo"];
        }
    }
}
