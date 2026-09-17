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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyEventConfig request structure.
 *
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getMode() Obtain 
 * @method void setMode(string $Mode) Set 
 * @method string getNotificationUrl() Obtain 
 * @method void setNotificationUrl(string $NotificationUrl) Set 
 * @method string getUploadMediaCompleteEventSwitch() Obtain 
 * @method void setUploadMediaCompleteEventSwitch(string $UploadMediaCompleteEventSwitch) Set 
 * @method string getDeleteMediaCompleteEventSwitch() Obtain 
 * @method void setDeleteMediaCompleteEventSwitch(string $DeleteMediaCompleteEventSwitch) Set 
 * @method string getPersistenceCompleteEventSwitch() Obtain 
 * @method void setPersistenceCompleteEventSwitch(string $PersistenceCompleteEventSwitch) Set 
 * @method string getSignKey() Obtain 
 * @method void setSignKey(string $SignKey) Set 
 */
class ModifyEventConfigRequest extends AbstractModel
{
    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var string 
     */
    public $Mode;

    /**
     * @var string 
     */
    public $NotificationUrl;

    /**
     * @var string 
     */
    public $UploadMediaCompleteEventSwitch;

    /**
     * @var string 
     */
    public $DeleteMediaCompleteEventSwitch;

    /**
     * @var string 
     */
    public $PersistenceCompleteEventSwitch;

    /**
     * @var string 
     */
    public $SignKey;

    /**
     * @param integer $SubAppId 
     * @param string $Mode 
     * @param string $NotificationUrl 
     * @param string $UploadMediaCompleteEventSwitch 
     * @param string $DeleteMediaCompleteEventSwitch 
     * @param string $PersistenceCompleteEventSwitch 
     * @param string $SignKey 
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("NotificationUrl",$param) and $param["NotificationUrl"] !== null) {
            $this->NotificationUrl = $param["NotificationUrl"];
        }

        if (array_key_exists("UploadMediaCompleteEventSwitch",$param) and $param["UploadMediaCompleteEventSwitch"] !== null) {
            $this->UploadMediaCompleteEventSwitch = $param["UploadMediaCompleteEventSwitch"];
        }

        if (array_key_exists("DeleteMediaCompleteEventSwitch",$param) and $param["DeleteMediaCompleteEventSwitch"] !== null) {
            $this->DeleteMediaCompleteEventSwitch = $param["DeleteMediaCompleteEventSwitch"];
        }

        if (array_key_exists("PersistenceCompleteEventSwitch",$param) and $param["PersistenceCompleteEventSwitch"] !== null) {
            $this->PersistenceCompleteEventSwitch = $param["PersistenceCompleteEventSwitch"];
        }

        if (array_key_exists("SignKey",$param) and $param["SignKey"] !== null) {
            $this->SignKey = $param["SignKey"];
        }
    }
}
