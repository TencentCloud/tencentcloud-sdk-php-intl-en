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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Retails of returned logs
 *
 * @method string getTimestamp() Obtain Log reported time
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setTimestamp(string $Timestamp) Set Log reported time
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getMessage() Obtain Log details
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setMessage(string $Message) Set Log details
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getSource() Obtain Event source
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setSource(string $Source) Set Event source
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getType() Obtain The event type.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set The event type.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getRuleIds() Obtain Event matching rule
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setRuleIds(string $RuleIds) Set Event matching rule
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getSubject() Obtain The instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubject(string $Subject) Set The instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain The region.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set The region.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Event status
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Event status
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class SearchLogResult extends AbstractModel
{
    /**
     * @var string Log reported time
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Timestamp;

    /**
     * @var string Log details
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Message;

    /**
     * @var string Event source
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Source;

    /**
     * @var string The event type.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Event matching rule
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $RuleIds;

    /**
     * @var string The instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Subject;

    /**
     * @var string The region.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var string Event status
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @param string $Timestamp Log reported time
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Message Log details
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Source Event source
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Type The event type.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $RuleIds Event matching rule
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Subject The instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Region The region.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Status Event status
Note: This field may return·null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("RuleIds",$param) and $param["RuleIds"] !== null) {
            $this->RuleIds = $param["RuleIds"];
        }

        if (array_key_exists("Subject",$param) and $param["Subject"] !== null) {
            $this->Subject = $param["Subject"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
