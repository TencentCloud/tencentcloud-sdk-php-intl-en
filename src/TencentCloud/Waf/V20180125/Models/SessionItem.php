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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Session definition
 *
 * @method string getCategory() Obtain Type to match
 * @method void setCategory(string $Category) Set Type to match
 * @method string getKeyOrStartMat() Obtain Start Mode
 * @method void setKeyOrStartMat(string $KeyOrStartMat) Set Start Mode
 * @method string getEndMat() Obtain End Mode
 * @method void setEndMat(string $EndMat) Set End Mode
 * @method string getStartOffset() Obtain Starting Offset
 * @method void setStartOffset(string $StartOffset) Set Starting Offset
 * @method string getEndOffset() Obtain End Offset
 * @method void setEndOffset(string $EndOffset) Set End Offset
 * @method string getSource() Obtain Data source
 * @method void setSource(string $Source) Set Data source
 * @method string getTsVersion() Obtain Update Timestamp
 * @method void setTsVersion(string $TsVersion) Set Update Timestamp
 * @method integer getSessionId() Obtain SessionID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSessionId(integer $SessionId) Set SessionID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSessionName() Obtain Session Name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSessionName(string $SessionName) Set Session Name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getSessionInUsed() Obtain Whether the session is being enabled

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSessionInUsed(boolean $SessionInUsed) Set Whether the session is being enabled

Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getRelatedRuleID() Obtain Session-related CC Rule ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRelatedRuleID(array $RelatedRuleID) Set Session-related CC Rule ID

Note: This field may return null, indicating that no valid values can be obtained.
 */
class SessionItem extends AbstractModel
{
    /**
     * @var string Type to match
     */
    public $Category;

    /**
     * @var string Start Mode
     */
    public $KeyOrStartMat;

    /**
     * @var string End Mode
     */
    public $EndMat;

    /**
     * @var string Starting Offset
     */
    public $StartOffset;

    /**
     * @var string End Offset
     */
    public $EndOffset;

    /**
     * @var string Data source
     */
    public $Source;

    /**
     * @var string Update Timestamp
     */
    public $TsVersion;

    /**
     * @var integer SessionID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SessionId;

    /**
     * @var string Session Name

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SessionName;

    /**
     * @var boolean Whether the session is being enabled

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SessionInUsed;

    /**
     * @var array Session-related CC Rule ID

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RelatedRuleID;

    /**
     * @param string $Category Type to match
     * @param string $KeyOrStartMat Start Mode
     * @param string $EndMat End Mode
     * @param string $StartOffset Starting Offset
     * @param string $EndOffset End Offset
     * @param string $Source Data source
     * @param string $TsVersion Update Timestamp
     * @param integer $SessionId SessionID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SessionName Session Name

Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $SessionInUsed Whether the session is being enabled

Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $RelatedRuleID Session-related CC Rule ID

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
        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("KeyOrStartMat",$param) and $param["KeyOrStartMat"] !== null) {
            $this->KeyOrStartMat = $param["KeyOrStartMat"];
        }

        if (array_key_exists("EndMat",$param) and $param["EndMat"] !== null) {
            $this->EndMat = $param["EndMat"];
        }

        if (array_key_exists("StartOffset",$param) and $param["StartOffset"] !== null) {
            $this->StartOffset = $param["StartOffset"];
        }

        if (array_key_exists("EndOffset",$param) and $param["EndOffset"] !== null) {
            $this->EndOffset = $param["EndOffset"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("TsVersion",$param) and $param["TsVersion"] !== null) {
            $this->TsVersion = $param["TsVersion"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionName",$param) and $param["SessionName"] !== null) {
            $this->SessionName = $param["SessionName"];
        }

        if (array_key_exists("SessionInUsed",$param) and $param["SessionInUsed"] !== null) {
            $this->SessionInUsed = $param["SessionInUsed"];
        }

        if (array_key_exists("RelatedRuleID",$param) and $param["RelatedRuleID"] !== null) {
            $this->RelatedRuleID = $param["RelatedRuleID"];
        }
    }
}
