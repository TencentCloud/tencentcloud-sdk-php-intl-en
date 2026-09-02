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
 * AI security assistant session information
 *
 * @method string getTitle() Obtain Title.
 * @method void setTitle(string $Title) Set Title.
 * @method string getSessionID() Obtain Session ID
 * @method void setSessionID(string $SessionID) Set Session ID
 * @method integer getModifyTime() Obtain Last modification timestamp.
 * @method void setModifyTime(integer $ModifyTime) Set Last modification timestamp.
 * @method boolean getIsPinned() Obtain Pin to top
 * @method void setIsPinned(boolean $IsPinned) Set Pin to top
 */
class AIAnalysisSession extends AbstractModel
{
    /**
     * @var string Title.
     */
    public $Title;

    /**
     * @var string Session ID
     */
    public $SessionID;

    /**
     * @var integer Last modification timestamp.
     */
    public $ModifyTime;

    /**
     * @var boolean Pin to top
     */
    public $IsPinned;

    /**
     * @param string $Title Title.
     * @param string $SessionID Session ID
     * @param integer $ModifyTime Last modification timestamp.
     * @param boolean $IsPinned Pin to top
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("SessionID",$param) and $param["SessionID"] !== null) {
            $this->SessionID = $param["SessionID"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("IsPinned",$param) and $param["IsPinned"] !== null) {
            $this->IsPinned = $param["IsPinned"];
        }
    }
}
