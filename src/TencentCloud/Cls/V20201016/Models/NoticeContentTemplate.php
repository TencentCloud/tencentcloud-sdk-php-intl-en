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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Notification content template information.
 *
 * @method string getNoticeContentId() Obtain Notification content template ID.
 * @method void setNoticeContentId(string $NoticeContentId) Set Notification content template ID.
 * @method string getName() Obtain notification content template name
 * @method void setName(string $Name) Set notification content template name
 * @method integer getType() Obtain Language type.

0: Chinese
1: English
 * @method void setType(integer $Type) Set Language type.

0: Chinese
1: English
 * @method array getNoticeContents() Obtain Notification content template information.
 * @method void setNoticeContents(array $NoticeContents) Set Notification content template information.
 * @method integer getFlag() Obtain Notification content template tag.

0: user-customized
1: Built-in
 * @method void setFlag(integer $Flag) Set Notification content template tag.

0: user-customized
1: Built-in
 * @method integer getUin() Obtain Root account of a creator.
 * @method void setUin(integer $Uin) Set Root account of a creator.
 * @method integer getSubUin() Obtain Sub-account of a creator or modifier.
 * @method void setSubUin(integer $SubUin) Set Sub-account of a creator or modifier.
 * @method integer getCreateTime() Obtain Creation time. A timestamp in seconds.
 * @method void setCreateTime(integer $CreateTime) Set Creation time. A timestamp in seconds.
 * @method integer getUpdateTime() Obtain Update time. A timestamp in seconds.
 * @method void setUpdateTime(integer $UpdateTime) Set Update time. A timestamp in seconds.
 */
class NoticeContentTemplate extends AbstractModel
{
    /**
     * @var string Notification content template ID.
     */
    public $NoticeContentId;

    /**
     * @var string notification content template name
     */
    public $Name;

    /**
     * @var integer Language type.

0: Chinese
1: English
     */
    public $Type;

    /**
     * @var array Notification content template information.
     */
    public $NoticeContents;

    /**
     * @var integer Notification content template tag.

0: user-customized
1: Built-in
     */
    public $Flag;

    /**
     * @var integer Root account of a creator.
     */
    public $Uin;

    /**
     * @var integer Sub-account of a creator or modifier.
     */
    public $SubUin;

    /**
     * @var integer Creation time. A timestamp in seconds.
     */
    public $CreateTime;

    /**
     * @var integer Update time. A timestamp in seconds.
     */
    public $UpdateTime;

    /**
     * @param string $NoticeContentId Notification content template ID.
     * @param string $Name notification content template name
     * @param integer $Type Language type.

0: Chinese
1: English
     * @param array $NoticeContents Notification content template information.
     * @param integer $Flag Notification content template tag.

0: user-customized
1: Built-in
     * @param integer $Uin Root account of a creator.
     * @param integer $SubUin Sub-account of a creator or modifier.
     * @param integer $CreateTime Creation time. A timestamp in seconds.
     * @param integer $UpdateTime Update time. A timestamp in seconds.
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
        if (array_key_exists("NoticeContentId",$param) and $param["NoticeContentId"] !== null) {
            $this->NoticeContentId = $param["NoticeContentId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("NoticeContents",$param) and $param["NoticeContents"] !== null) {
            $this->NoticeContents = [];
            foreach ($param["NoticeContents"] as $key => $value){
                $obj = new NoticeContent();
                $obj->deserialize($value);
                array_push($this->NoticeContents, $obj);
            }
        }

        if (array_key_exists("Flag",$param) and $param["Flag"] !== null) {
            $this->Flag = $param["Flag"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
