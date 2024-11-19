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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Channel Linear Assembly Location Alarm Information.
 *
 * @method string getLocationId() Obtain Location ID.
 * @method void setLocationId(string $LocationId) Set Location ID.
 * @method integer getCode() Obtain Alarm event code.
 * @method void setCode(integer $Code) Set Alarm event code.
 * @method string getCategory() Obtain Alarm classification.
 * @method void setCategory(string $Category) Set Alarm classification.
 * @method string getMessage() Obtain Alarm message.
 * @method void setMessage(string $Message) Set Alarm message.
 * @method integer getLastModifiedTime() Obtain Update time.
 * @method void setLastModifiedTime(integer $LastModifiedTime) Set Update time.
 * @method string getLocationName() Obtain Location name.
 * @method void setLocationName(string $LocationName) Set Location name.
 */
class LocationAlert extends AbstractModel
{
    /**
     * @var string Location ID.
     */
    public $LocationId;

    /**
     * @var integer Alarm event code.
     */
    public $Code;

    /**
     * @var string Alarm classification.
     */
    public $Category;

    /**
     * @var string Alarm message.
     */
    public $Message;

    /**
     * @var integer Update time.
     */
    public $LastModifiedTime;

    /**
     * @var string Location name.
     */
    public $LocationName;

    /**
     * @param string $LocationId Location ID.
     * @param integer $Code Alarm event code.
     * @param string $Category Alarm classification.
     * @param string $Message Alarm message.
     * @param integer $LastModifiedTime Update time.
     * @param string $LocationName Location name.
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
        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("LastModifiedTime",$param) and $param["LastModifiedTime"] !== null) {
            $this->LastModifiedTime = $param["LastModifiedTime"];
        }

        if (array_key_exists("LocationName",$param) and $param["LocationName"] !== null) {
            $this->LocationName = $param["LocationName"];
        }
    }
}
