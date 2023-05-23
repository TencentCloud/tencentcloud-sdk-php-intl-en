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
 * CreateEventBus request structure.
 *
 * @method string getEventBusName() Obtain Event bus name: it can contain 2-60 letters, digits, underscores, and hyphens and must start with a letter and end with a digit or letter.
 * @method void setEventBusName(string $EventBusName) Set Event bus name: it can contain 2-60 letters, digits, underscores, and hyphens and must start with a letter and end with a digit or letter.
 * @method string getDescription() Obtain Event bus description, which can contain up to 200 characters of any type.
 * @method void setDescription(string $Description) Set Event bus description, which can contain up to 200 characters of any type.
 * @method integer getSaveDays() Obtain Log retention period
 * @method void setSaveDays(integer $SaveDays) Set Log retention period
 * @method boolean getEnableStore() Obtain Whether to enable log storage
 * @method void setEnableStore(boolean $EnableStore) Set Whether to enable log storage
 */
class CreateEventBusRequest extends AbstractModel
{
    /**
     * @var string Event bus name: it can contain 2-60 letters, digits, underscores, and hyphens and must start with a letter and end with a digit or letter.
     */
    public $EventBusName;

    /**
     * @var string Event bus description, which can contain up to 200 characters of any type.
     */
    public $Description;

    /**
     * @var integer Log retention period
     */
    public $SaveDays;

    /**
     * @var boolean Whether to enable log storage
     */
    public $EnableStore;

    /**
     * @param string $EventBusName Event bus name: it can contain 2-60 letters, digits, underscores, and hyphens and must start with a letter and end with a digit or letter.
     * @param string $Description Event bus description, which can contain up to 200 characters of any type.
     * @param integer $SaveDays Log retention period
     * @param boolean $EnableStore Whether to enable log storage
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
        if (array_key_exists("EventBusName",$param) and $param["EventBusName"] !== null) {
            $this->EventBusName = $param["EventBusName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SaveDays",$param) and $param["SaveDays"] !== null) {
            $this->SaveDays = $param["SaveDays"];
        }

        if (array_key_exists("EnableStore",$param) and $param["EnableStore"] !== null) {
            $this->EnableStore = $param["EnableStore"];
        }
    }
}
