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
namespace TencentCloud\Ims\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Recognition tag information
 *
 * @method string getName() Obtain Tag name
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Tag name
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getScore() Obtain Confidence score. Value: 1 to 100. 
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setScore(integer $Score) Set Confidence score. Value: 1 to 100. 
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method Location getLocation() Obtain Location information. It returns 0 if there is not location information.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setLocation(Location $Location) Set Location information. It returns 0 if there is not location information.
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class RecognitionTag extends AbstractModel
{
    /**
     * @var string Tag name
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var integer Confidence score. Value: 1 to 100. 
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Score;

    /**
     * @var Location Location information. It returns 0 if there is not location information.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Location;

    /**
     * @param string $Name Tag name
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $Score Confidence score. Value: 1 to 100. 
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param Location $Location Location information. It returns 0 if there is not location information.
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = new Location();
            $this->Location->deserialize($param["Location"]);
        }
    }
}
