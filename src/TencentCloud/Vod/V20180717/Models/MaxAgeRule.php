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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getMaxAgeType() Obtain 
 * @method void setMaxAgeType(string $MaxAgeType) Set 
 * @method array getMaxAgeContents() Obtain 
 * @method void setMaxAgeContents(array $MaxAgeContents) Set 
 * @method integer getMaxAgeTime() Obtain 
 * @method void setMaxAgeTime(integer $MaxAgeTime) Set 
 * @method string getFollowOrigin() Obtain 
 * @method void setFollowOrigin(string $FollowOrigin) Set 
 */
class MaxAgeRule extends AbstractModel
{
    /**
     * @var string 
     */
    public $MaxAgeType;

    /**
     * @var array 
     */
    public $MaxAgeContents;

    /**
     * @var integer 
     */
    public $MaxAgeTime;

    /**
     * @var string 
     */
    public $FollowOrigin;

    /**
     * @param string $MaxAgeType 
     * @param array $MaxAgeContents 
     * @param integer $MaxAgeTime 
     * @param string $FollowOrigin 
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
        if (array_key_exists("MaxAgeType",$param) and $param["MaxAgeType"] !== null) {
            $this->MaxAgeType = $param["MaxAgeType"];
        }

        if (array_key_exists("MaxAgeContents",$param) and $param["MaxAgeContents"] !== null) {
            $this->MaxAgeContents = $param["MaxAgeContents"];
        }

        if (array_key_exists("MaxAgeTime",$param) and $param["MaxAgeTime"] !== null) {
            $this->MaxAgeTime = $param["MaxAgeTime"];
        }

        if (array_key_exists("FollowOrigin",$param) and $param["FollowOrigin"] !== null) {
            $this->FollowOrigin = $param["FollowOrigin"];
        }
    }
}
