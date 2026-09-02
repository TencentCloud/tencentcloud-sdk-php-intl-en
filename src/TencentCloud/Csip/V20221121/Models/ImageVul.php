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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image vulnerability information
 *
 * @method string getOwnerAccountName() Obtain <p>Owner account name</p>
 * @method void setOwnerAccountName(string $OwnerAccountName) Set <p>Owner account name</p>
 * @method string getOwnerUin() Obtain <p>Owner account uin</p>
 * @method void setOwnerUin(string $OwnerUin) Set <p>Owner account uin</p>
 * @method integer getOwnerAppId() Obtain <p>Owner account appid</p>
 * @method void setOwnerAppId(integer $OwnerAppId) Set <p>Owner account appid</p>
 * @method integer getID() Obtain <p>Record id</p>
 * @method void setID(integer $ID) Set <p>Record id</p>
 * @method string getFirstFoundTime() Obtain <p>First discovery time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method void setFirstFoundTime(string $FirstFoundTime) Set <p>First discovery time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method string getLatestFoundTime() Obtain <p>Last discovery time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method void setLatestFoundTime(string $LatestFoundTime) Set <p>Last discovery time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method ImageVulBaseInfo getVulInfo() Obtain <p>Vulnerability details</p>
 * @method void setVulInfo(ImageVulBaseInfo $VulInfo) Set <p>Vulnerability details</p>
 * @method string getImageId() Obtain <p>Image ID.</p>
 * @method void setImageId(string $ImageId) Set <p>Image ID.</p>
 */
class ImageVul extends AbstractModel
{
    /**
     * @var string <p>Owner account name</p>
     */
    public $OwnerAccountName;

    /**
     * @var string <p>Owner account uin</p>
     */
    public $OwnerUin;

    /**
     * @var integer <p>Owner account appid</p>
     */
    public $OwnerAppId;

    /**
     * @var integer <p>Record id</p>
     */
    public $ID;

    /**
     * @var string <p>First discovery time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     */
    public $FirstFoundTime;

    /**
     * @var string <p>Last discovery time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     */
    public $LatestFoundTime;

    /**
     * @var ImageVulBaseInfo <p>Vulnerability details</p>
     */
    public $VulInfo;

    /**
     * @var string <p>Image ID.</p>
     */
    public $ImageId;

    /**
     * @param string $OwnerAccountName <p>Owner account name</p>
     * @param string $OwnerUin <p>Owner account uin</p>
     * @param integer $OwnerAppId <p>Owner account appid</p>
     * @param integer $ID <p>Record id</p>
     * @param string $FirstFoundTime <p>First discovery time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     * @param string $LatestFoundTime <p>Last discovery time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     * @param ImageVulBaseInfo $VulInfo <p>Vulnerability details</p>
     * @param string $ImageId <p>Image ID.</p>
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
        if (array_key_exists("OwnerAccountName",$param) and $param["OwnerAccountName"] !== null) {
            $this->OwnerAccountName = $param["OwnerAccountName"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("OwnerAppId",$param) and $param["OwnerAppId"] !== null) {
            $this->OwnerAppId = $param["OwnerAppId"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("FirstFoundTime",$param) and $param["FirstFoundTime"] !== null) {
            $this->FirstFoundTime = $param["FirstFoundTime"];
        }

        if (array_key_exists("LatestFoundTime",$param) and $param["LatestFoundTime"] !== null) {
            $this->LatestFoundTime = $param["LatestFoundTime"];
        }

        if (array_key_exists("VulInfo",$param) and $param["VulInfo"] !== null) {
            $this->VulInfo = new ImageVulBaseInfo();
            $this->VulInfo->deserialize($param["VulInfo"]);
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }
    }
}
