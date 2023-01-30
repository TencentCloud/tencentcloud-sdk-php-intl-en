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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the runtime rule bound to the image
 *
 * @method string getImageId() Obtain Image ID
 * @method void setImageId(string $ImageId) Set Image ID
 * @method string getImageName() Obtain Image name
 * @method void setImageName(string $ImageName) Set Image name
 * @method integer getContainerCnt() Obtain Number of associated containers
 * @method void setContainerCnt(integer $ContainerCnt) Set Number of associated containers
 * @method string getRuleId() Obtain Bound rule ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleId(string $RuleId) Set Bound rule ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRuleName() Obtain Rule name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleName(string $RuleName) Set Rule name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getImageSize() Obtain Image size
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageSize(integer $ImageSize) Set Image size
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getScanTime() Obtain Last scan time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanTime(string $ScanTime) Set Last scan time
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ImagesBindRuleInfo extends AbstractModel
{
    /**
     * @var string Image ID
     */
    public $ImageId;

    /**
     * @var string Image name
     */
    public $ImageName;

    /**
     * @var integer Number of associated containers
     */
    public $ContainerCnt;

    /**
     * @var string Bound rule ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleId;

    /**
     * @var string Rule name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleName;

    /**
     * @var integer Image size
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImageSize;

    /**
     * @var string Last scan time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanTime;

    /**
     * @param string $ImageId Image ID
     * @param string $ImageName Image name
     * @param integer $ContainerCnt Number of associated containers
     * @param string $RuleId Bound rule ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RuleName Rule name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ImageSize Image size
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ScanTime Last scan time
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ContainerCnt",$param) and $param["ContainerCnt"] !== null) {
            $this->ContainerCnt = $param["ContainerCnt"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("ImageSize",$param) and $param["ImageSize"] !== null) {
            $this->ImageSize = $param["ImageSize"];
        }

        if (array_key_exists("ScanTime",$param) and $param["ScanTime"] !== null) {
            $this->ScanTime = $param["ScanTime"];
        }
    }
}
