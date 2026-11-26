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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of an edge function.
 *
 * @method string getFunctionId() Obtain <p>Function ID.</p>
 * @method void setFunctionId(string $FunctionId) Set <p>Function ID.</p>
 * @method string getZoneId() Obtain <p>Site ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Site ID.</p>
 * @method string getName() Obtain <p>Function name.</p>
 * @method void setName(string $Name) Set <p>Function name.</p>
 * @method string getRemark() Obtain <p>Function description.</p>
 * @method void setRemark(string $Remark) Set <p>Function description.</p>
 * @method string getContent() Obtain <p>Function content.</p>
 * @method void setContent(string $Content) Set <p>Function content.</p>
 * @method string getDomain() Obtain <p>Default domain name of a function.</p>
 * @method void setDomain(string $Domain) Set <p>Default domain name of a function.</p>
 * @method array getDomainComplianceRestrictions() Obtain <p>List of regional access restrictions on the default domain name of edge functions due to compliance issues.</p>
 * @method void setDomainComplianceRestrictions(array $DomainComplianceRestrictions) Set <p>List of regional access restrictions on the default domain name of edge functions due to compliance issues.</p>
 * @method string getCreateTime() Obtain <p>Creation time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.</p>
 * @method string getUpdateTime() Obtain <p>Modification time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Modification time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.</p>
 */
class FunctionInfo extends AbstractModel
{
    /**
     * @var string <p>Function ID.</p>
     */
    public $FunctionId;

    /**
     * @var string <p>Site ID.</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Function name.</p>
     */
    public $Name;

    /**
     * @var string <p>Function description.</p>
     */
    public $Remark;

    /**
     * @var string <p>Function content.</p>
     */
    public $Content;

    /**
     * @var string <p>Default domain name of a function.</p>
     */
    public $Domain;

    /**
     * @var array <p>List of regional access restrictions on the default domain name of edge functions due to compliance issues.</p>
     */
    public $DomainComplianceRestrictions;

    /**
     * @var string <p>Creation time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Modification time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.</p>
     */
    public $UpdateTime;

    /**
     * @param string $FunctionId <p>Function ID.</p>
     * @param string $ZoneId <p>Site ID.</p>
     * @param string $Name <p>Function name.</p>
     * @param string $Remark <p>Function description.</p>
     * @param string $Content <p>Function content.</p>
     * @param string $Domain <p>Default domain name of a function.</p>
     * @param array $DomainComplianceRestrictions <p>List of regional access restrictions on the default domain name of edge functions due to compliance issues.</p>
     * @param string $CreateTime <p>Creation time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.</p>
     * @param string $UpdateTime <p>Modification time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.</p>
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
        if (array_key_exists("FunctionId",$param) and $param["FunctionId"] !== null) {
            $this->FunctionId = $param["FunctionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainComplianceRestrictions",$param) and $param["DomainComplianceRestrictions"] !== null) {
            $this->DomainComplianceRestrictions = [];
            foreach ($param["DomainComplianceRestrictions"] as $key => $value){
                $obj = new ComplianceRestriction();
                $obj->deserialize($value);
                array_push($this->DomainComplianceRestrictions, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
