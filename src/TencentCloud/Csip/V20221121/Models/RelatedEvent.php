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
 * Related Attack Event Structure
 *
 * @method string getEventID() Obtain Event ID
 * @method void setEventID(string $EventID) Set Event ID
 * @method string getDescription() Obtain Event description
 * @method void setDescription(string $Description) Set Event description
 * @method integer getRelatedCount() Obtain Number of Alarms Associated with Event
 * @method void setRelatedCount(integer $RelatedCount) Set Number of Alarms Associated with Event
 */
class RelatedEvent extends AbstractModel
{
    /**
     * @var string Event ID
     */
    public $EventID;

    /**
     * @var string Event description
     */
    public $Description;

    /**
     * @var integer Number of Alarms Associated with Event
     */
    public $RelatedCount;

    /**
     * @param string $EventID Event ID
     * @param string $Description Event description
     * @param integer $RelatedCount Number of Alarms Associated with Event
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
        if (array_key_exists("EventID",$param) and $param["EventID"] !== null) {
            $this->EventID = $param["EventID"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RelatedCount",$param) and $param["RelatedCount"] !== null) {
            $this->RelatedCount = $param["RelatedCount"];
        }
    }
}
