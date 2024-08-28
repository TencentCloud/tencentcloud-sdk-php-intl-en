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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyWebHookPolicy request structure.
 *
 * @method integer getId() Obtain id
 * @method void setId(integer $Id) Set id
 * @method string getName() Obtain Policy name
 * @method void setName(string $Name) Set Policy name
 * @method array getEvents() Obtain Event type
 * @method void setEvents(array $Events) Set Event type
 * @method array getHostLabels() Obtain Host range
 * @method void setHostLabels(array $HostLabels) Set Host range
 * @method array getReceivers() Obtain Recipient
 * @method void setReceivers(array $Receivers) Set Recipient
 * @method integer getFormat() Obtain Format. 0: text; 1: JSON.
 * @method void setFormat(integer $Format) Set Format. 0: text; 1: JSON.
 * @method array getCustomFields() Obtain Custom passthrough field
 * @method void setCustomFields(array $CustomFields) Set Custom passthrough field
 * @method integer getIsDisabled() Obtain Enable/Disable [1-Disable, 0-Enable]
 * @method void setIsDisabled(integer $IsDisabled) Set Enable/Disable [1-Disable, 0-Enable]
 * @method array getQuuids() Obtain Host list
 * @method void setQuuids(array $Quuids) Set Host list
 * @method array getExcludedQuuids() Obtain 
 * @method void setExcludedQuuids(array $ExcludedQuuids) Set 
 */
class ModifyWebHookPolicyRequest extends AbstractModel
{
    /**
     * @var integer id
     */
    public $Id;

    /**
     * @var string Policy name
     */
    public $Name;

    /**
     * @var array Event type
     */
    public $Events;

    /**
     * @var array Host range
     */
    public $HostLabels;

    /**
     * @var array Recipient
     */
    public $Receivers;

    /**
     * @var integer Format. 0: text; 1: JSON.
     */
    public $Format;

    /**
     * @var array Custom passthrough field
     */
    public $CustomFields;

    /**
     * @var integer Enable/Disable [1-Disable, 0-Enable]
     */
    public $IsDisabled;

    /**
     * @var array Host list
     */
    public $Quuids;

    /**
     * @var array 
     */
    public $ExcludedQuuids;

    /**
     * @param integer $Id id
     * @param string $Name Policy name
     * @param array $Events Event type
     * @param array $HostLabels Host range
     * @param array $Receivers Recipient
     * @param integer $Format Format. 0: text; 1: JSON.
     * @param array $CustomFields Custom passthrough field
     * @param integer $IsDisabled Enable/Disable [1-Disable, 0-Enable]
     * @param array $Quuids Host list
     * @param array $ExcludedQuuids 
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Events",$param) and $param["Events"] !== null) {
            $this->Events = [];
            foreach ($param["Events"] as $key => $value){
                $obj = new WebHookEventKv();
                $obj->deserialize($value);
                array_push($this->Events, $obj);
            }
        }

        if (array_key_exists("HostLabels",$param) and $param["HostLabels"] !== null) {
            $this->HostLabels = [];
            foreach ($param["HostLabels"] as $key => $value){
                $obj = new WebHookHostLabel();
                $obj->deserialize($value);
                array_push($this->HostLabels, $obj);
            }
        }

        if (array_key_exists("Receivers",$param) and $param["Receivers"] !== null) {
            $this->Receivers = [];
            foreach ($param["Receivers"] as $key => $value){
                $obj = new WebHookReceiver();
                $obj->deserialize($value);
                array_push($this->Receivers, $obj);
            }
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("CustomFields",$param) and $param["CustomFields"] !== null) {
            $this->CustomFields = [];
            foreach ($param["CustomFields"] as $key => $value){
                $obj = new WebHookCustomField();
                $obj->deserialize($value);
                array_push($this->CustomFields, $obj);
            }
        }

        if (array_key_exists("IsDisabled",$param) and $param["IsDisabled"] !== null) {
            $this->IsDisabled = $param["IsDisabled"];
        }

        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }

        if (array_key_exists("ExcludedQuuids",$param) and $param["ExcludedQuuids"] !== null) {
            $this->ExcludedQuuids = $param["ExcludedQuuids"];
        }
    }
}
