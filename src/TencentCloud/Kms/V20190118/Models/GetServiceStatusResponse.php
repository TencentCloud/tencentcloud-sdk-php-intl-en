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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetServiceStatus response structure.
 *
 * @method boolean getServiceEnabled() Obtain Whether the KMS service has been activated. true: activated
 * @method void setServiceEnabled(boolean $ServiceEnabled) Set Whether the KMS service has been activated. true: activated
 * @method integer getInvalidType() Obtain Service unavailability type. 0: not purchased; 1: normal; 2: suspended due to arrears; 3: resource released
 * @method void setInvalidType(integer $InvalidType) Set Service unavailability type. 0: not purchased; 1: normal; 2: suspended due to arrears; 3: resource released
 * @method integer getUserLevel() Obtain 0: Basic Edition, 1: Ultimate Edition
 * @method void setUserLevel(integer $UserLevel) Set 0: Basic Edition, 1: Ultimate Edition
 * @method integer getProExpireTime() Obtain Ultimate Edition expiration time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProExpireTime(integer $ProExpireTime) Set Ultimate Edition expiration time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getProRenewFlag() Obtain Whether to automatically renew Ultimate Edition. 0: no, 1: yes
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProRenewFlag(integer $ProRenewFlag) Set Whether to automatically renew Ultimate Edition. 0: no, 1: yes
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getProResourceId() Obtain Unique ID of the Ultimate Edition purchase record. If the Ultimate Edition is not activated, the returned value will be null.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProResourceId(string $ProResourceId) Set Unique ID of the Ultimate Edition purchase record. If the Ultimate Edition is not activated, the returned value will be null.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getExclusiveVSMEnabled() Obtain Whether to activate Managed KMS
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setExclusiveVSMEnabled(boolean $ExclusiveVSMEnabled) Set Whether to activate Managed KMS
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method boolean getExclusiveHSMEnabled() Obtain Whether to activate Exclusive KMS
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setExclusiveHSMEnabled(boolean $ExclusiveHSMEnabled) Set Whether to activate Exclusive KMS
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetServiceStatusResponse extends AbstractModel
{
    /**
     * @var boolean Whether the KMS service has been activated. true: activated
     */
    public $ServiceEnabled;

    /**
     * @var integer Service unavailability type. 0: not purchased; 1: normal; 2: suspended due to arrears; 3: resource released
     */
    public $InvalidType;

    /**
     * @var integer 0: Basic Edition, 1: Ultimate Edition
     */
    public $UserLevel;

    /**
     * @var integer Ultimate Edition expiration time
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProExpireTime;

    /**
     * @var integer Whether to automatically renew Ultimate Edition. 0: no, 1: yes
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProRenewFlag;

    /**
     * @var string Unique ID of the Ultimate Edition purchase record. If the Ultimate Edition is not activated, the returned value will be null.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProResourceId;

    /**
     * @var boolean Whether to activate Managed KMS
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ExclusiveVSMEnabled;

    /**
     * @var boolean Whether to activate Exclusive KMS
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ExclusiveHSMEnabled;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param boolean $ServiceEnabled Whether the KMS service has been activated. true: activated
     * @param integer $InvalidType Service unavailability type. 0: not purchased; 1: normal; 2: suspended due to arrears; 3: resource released
     * @param integer $UserLevel 0: Basic Edition, 1: Ultimate Edition
     * @param integer $ProExpireTime Ultimate Edition expiration time
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ProRenewFlag Whether to automatically renew Ultimate Edition. 0: no, 1: yes
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ProResourceId Unique ID of the Ultimate Edition purchase record. If the Ultimate Edition is not activated, the returned value will be null.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $ExclusiveVSMEnabled Whether to activate Managed KMS
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param boolean $ExclusiveHSMEnabled Whether to activate Exclusive KMS
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("ServiceEnabled",$param) and $param["ServiceEnabled"] !== null) {
            $this->ServiceEnabled = $param["ServiceEnabled"];
        }

        if (array_key_exists("InvalidType",$param) and $param["InvalidType"] !== null) {
            $this->InvalidType = $param["InvalidType"];
        }

        if (array_key_exists("UserLevel",$param) and $param["UserLevel"] !== null) {
            $this->UserLevel = $param["UserLevel"];
        }

        if (array_key_exists("ProExpireTime",$param) and $param["ProExpireTime"] !== null) {
            $this->ProExpireTime = $param["ProExpireTime"];
        }

        if (array_key_exists("ProRenewFlag",$param) and $param["ProRenewFlag"] !== null) {
            $this->ProRenewFlag = $param["ProRenewFlag"];
        }

        if (array_key_exists("ProResourceId",$param) and $param["ProResourceId"] !== null) {
            $this->ProResourceId = $param["ProResourceId"];
        }

        if (array_key_exists("ExclusiveVSMEnabled",$param) and $param["ExclusiveVSMEnabled"] !== null) {
            $this->ExclusiveVSMEnabled = $param["ExclusiveVSMEnabled"];
        }

        if (array_key_exists("ExclusiveHSMEnabled",$param) and $param["ExclusiveHSMEnabled"] !== null) {
            $this->ExclusiveHSMEnabled = $param["ExclusiveHSMEnabled"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
