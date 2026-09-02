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
 * Sensitive information in the mirror
 *
 * @method integer getBehavior() Obtain <p>Sensitive information behavior types</p><p>Enumeration values:</p><ul><li>1: start up with root account</li><li>2: code leakage</li><li>3: credential leakage</li></ul>
 * @method void setBehavior(integer $Behavior) Set <p>Sensitive information behavior types</p><p>Enumeration values:</p><ul><li>1: start up with root account</li><li>2: code leakage</li><li>3: credential leakage</li></ul>
 * @method integer getType() Obtain <p>Rule type.</p>
 * @method void setType(integer $Type) Set <p>Rule type.</p>
 * @method string getLevel() Obtain <p>Risk level</p><p>Enumeration values:</p><ul><li>1: Low risk</li><li>2: Medium risk</li><li>3: High-risk</li><li>4: Severe risk</li></ul>
 * @method void setLevel(string $Level) Set <p>Risk level</p><p>Enumeration values:</p><ul><li>1: Low risk</li><li>2: Medium risk</li><li>3: High-risk</li><li>4: Severe risk</li></ul>
 * @method string getDescribe() Obtain <p>Risk description</p>
 * @method void setDescribe(string $Describe) Set <p>Risk description</p>
 * @method string getInstructionContent() Obtain <p>Risk content</p>
 * @method void setInstructionContent(string $InstructionContent) Set <p>Risk content</p>
 * @method string getImageId() Obtain <p>Image ID.</p>
 * @method void setImageId(string $ImageId) Set <p>Image ID.</p>
 * @method string getOwnerAccountName() Obtain <p>Associated account name</p>
 * @method void setOwnerAccountName(string $OwnerAccountName) Set <p>Associated account name</p>
 * @method string getOwnerUin() Obtain <p>Associated account uin</p>
 * @method void setOwnerUin(string $OwnerUin) Set <p>Associated account uin</p>
 * @method integer getOwnerAppId() Obtain <p>appid of the associated account</p>
 * @method void setOwnerAppId(integer $OwnerAppId) Set <p>appid of the associated account</p>
 * @method integer getAffectImageCount() Obtain <p>Numbers of affected images</p>
 * @method void setAffectImageCount(integer $AffectImageCount) Set <p>Numbers of affected images</p>
 * @method string getLayerId() Obtain <p>Image layer Id</p>
 * @method void setLayerId(string $LayerId) Set <p>Image layer Id</p>
 * @method integer getId() Obtain <p>Image Id</p>
 * @method void setId(integer $Id) Set <p>Image Id</p>
 * @method string getFirstFoundTime() Obtain <p>First discovery time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method void setFirstFoundTime(string $FirstFoundTime) Set <p>First discovery time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method string getLatestFoundTime() Obtain <p>Most recent discovery time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method void setLatestFoundTime(string $LatestFoundTime) Set <p>Most recent discovery time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method integer getLayerIndex() Obtain <p>Image layer serial number</p>
 * @method void setLayerIndex(integer $LayerIndex) Set <p>Image layer serial number</p>
 */
class ImageSensitiveInfo extends AbstractModel
{
    /**
     * @var integer <p>Sensitive information behavior types</p><p>Enumeration values:</p><ul><li>1: start up with root account</li><li>2: code leakage</li><li>3: credential leakage</li></ul>
     */
    public $Behavior;

    /**
     * @var integer <p>Rule type.</p>
     */
    public $Type;

    /**
     * @var string <p>Risk level</p><p>Enumeration values:</p><ul><li>1: Low risk</li><li>2: Medium risk</li><li>3: High-risk</li><li>4: Severe risk</li></ul>
     */
    public $Level;

    /**
     * @var string <p>Risk description</p>
     */
    public $Describe;

    /**
     * @var string <p>Risk content</p>
     */
    public $InstructionContent;

    /**
     * @var string <p>Image ID.</p>
     */
    public $ImageId;

    /**
     * @var string <p>Associated account name</p>
     */
    public $OwnerAccountName;

    /**
     * @var string <p>Associated account uin</p>
     */
    public $OwnerUin;

    /**
     * @var integer <p>appid of the associated account</p>
     */
    public $OwnerAppId;

    /**
     * @var integer <p>Numbers of affected images</p>
     */
    public $AffectImageCount;

    /**
     * @var string <p>Image layer Id</p>
     */
    public $LayerId;

    /**
     * @var integer <p>Image Id</p>
     */
    public $Id;

    /**
     * @var string <p>First discovery time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     */
    public $FirstFoundTime;

    /**
     * @var string <p>Most recent discovery time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     */
    public $LatestFoundTime;

    /**
     * @var integer <p>Image layer serial number</p>
     */
    public $LayerIndex;

    /**
     * @param integer $Behavior <p>Sensitive information behavior types</p><p>Enumeration values:</p><ul><li>1: start up with root account</li><li>2: code leakage</li><li>3: credential leakage</li></ul>
     * @param integer $Type <p>Rule type.</p>
     * @param string $Level <p>Risk level</p><p>Enumeration values:</p><ul><li>1: Low risk</li><li>2: Medium risk</li><li>3: High-risk</li><li>4: Severe risk</li></ul>
     * @param string $Describe <p>Risk description</p>
     * @param string $InstructionContent <p>Risk content</p>
     * @param string $ImageId <p>Image ID.</p>
     * @param string $OwnerAccountName <p>Associated account name</p>
     * @param string $OwnerUin <p>Associated account uin</p>
     * @param integer $OwnerAppId <p>appid of the associated account</p>
     * @param integer $AffectImageCount <p>Numbers of affected images</p>
     * @param string $LayerId <p>Image layer Id</p>
     * @param integer $Id <p>Image Id</p>
     * @param string $FirstFoundTime <p>First discovery time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     * @param string $LatestFoundTime <p>Most recent discovery time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     * @param integer $LayerIndex <p>Image layer serial number</p>
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
        if (array_key_exists("Behavior",$param) and $param["Behavior"] !== null) {
            $this->Behavior = $param["Behavior"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("InstructionContent",$param) and $param["InstructionContent"] !== null) {
            $this->InstructionContent = $param["InstructionContent"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
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

        if (array_key_exists("AffectImageCount",$param) and $param["AffectImageCount"] !== null) {
            $this->AffectImageCount = $param["AffectImageCount"];
        }

        if (array_key_exists("LayerId",$param) and $param["LayerId"] !== null) {
            $this->LayerId = $param["LayerId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("FirstFoundTime",$param) and $param["FirstFoundTime"] !== null) {
            $this->FirstFoundTime = $param["FirstFoundTime"];
        }

        if (array_key_exists("LatestFoundTime",$param) and $param["LatestFoundTime"] !== null) {
            $this->LatestFoundTime = $param["LatestFoundTime"];
        }

        if (array_key_exists("LayerIndex",$param) and $param["LayerIndex"] !== null) {
            $this->LayerIndex = $param["LayerIndex"];
        }
    }
}
