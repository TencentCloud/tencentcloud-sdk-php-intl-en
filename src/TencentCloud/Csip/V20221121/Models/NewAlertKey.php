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
 * The structure is used to input the key of the alarm to update the alarm status.
 *
 * @method string getAppId() Obtain User AppID to Be Changed
 * @method void setAppId(string $AppId) Set User AppID to Be Changed
 * @method string getType() Obtain Alarm category
 * @method void setType(string $Type) Set Alarm category
 * @method string getSubType() Obtain Alarm Subcategory
 * @method void setSubType(string $SubType) Set Alarm Subcategory
 * @method string getSource() Obtain Alarm source
 * @method void setSource(string $Source) Set Alarm source
 * @method string getName() Obtain Alarm name
 * @method void setName(string $Name) Set Alarm name
 * @method string getKey() Obtain Alarm Key
 * @method void setKey(string $Key) Set Alarm Key
 * @method string getDate() Obtain Time
 * @method void setDate(string $Date) Set Time
 * @method integer getStatus() Obtain Status.
 * @method void setStatus(integer $Status) Set Status.
 */
class NewAlertKey extends AbstractModel
{
    /**
     * @var string User AppID to Be Changed
     */
    public $AppId;

    /**
     * @var string Alarm category
     */
    public $Type;

    /**
     * @var string Alarm Subcategory
     */
    public $SubType;

    /**
     * @var string Alarm source
     */
    public $Source;

    /**
     * @var string Alarm name
     */
    public $Name;

    /**
     * @var string Alarm Key
     */
    public $Key;

    /**
     * @var string Time
     */
    public $Date;

    /**
     * @var integer Status.
     */
    public $Status;

    /**
     * @param string $AppId User AppID to Be Changed
     * @param string $Type Alarm category
     * @param string $SubType Alarm Subcategory
     * @param string $Source Alarm source
     * @param string $Name Alarm name
     * @param string $Key Alarm Key
     * @param string $Date Time
     * @param integer $Status Status.
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SubType",$param) and $param["SubType"] !== null) {
            $this->SubType = $param["SubType"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
