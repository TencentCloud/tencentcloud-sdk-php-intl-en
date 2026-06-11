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
 * ModifyNoticeContent request structure.
 *
 * @method string getNoticeContentId() Obtain Notification content template ID. Obtain the notification content template ID by searching the notification content template (https://www.tencentcloud.com/document/api/614/111714?from_cn_redirect=1).
 * @method void setNoticeContentId(string $NoticeContentId) Set Notification content template ID. Obtain the notification content template ID by searching the notification content template (https://www.tencentcloud.com/document/api/614/111714?from_cn_redirect=1).
 * @method string getName() Obtain Notification content template name.
 * @method void setName(string $Name) Set Notification content template name.
 * @method integer getType() Obtain Content language of the notification.

0-Chinese by default, 1-English
 * @method void setType(integer $Type) Set Content language of the notification.

0-Chinese by default, 1-English
 * @method array getNoticeContents() Obtain Notification content template details.
 * @method void setNoticeContents(array $NoticeContents) Set Notification content template details.
 */
class ModifyNoticeContentRequest extends AbstractModel
{
    /**
     * @var string Notification content template ID. Obtain the notification content template ID by searching the notification content template (https://www.tencentcloud.com/document/api/614/111714?from_cn_redirect=1).
     */
    public $NoticeContentId;

    /**
     * @var string Notification content template name.
     */
    public $Name;

    /**
     * @var integer Content language of the notification.

0-Chinese by default, 1-English
     */
    public $Type;

    /**
     * @var array Notification content template details.
     */
    public $NoticeContents;

    /**
     * @param string $NoticeContentId Notification content template ID. Obtain the notification content template ID by searching the notification content template (https://www.tencentcloud.com/document/api/614/111714?from_cn_redirect=1).
     * @param string $Name Notification content template name.
     * @param integer $Type Content language of the notification.

0-Chinese by default, 1-English
     * @param array $NoticeContents Notification content template details.
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
    }
}
