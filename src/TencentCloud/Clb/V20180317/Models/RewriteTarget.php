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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Redirect target information
 *
 * @method string getTargetListenerId() Obtain Listener ID of a redirect target
Note: This field may return null, indicating that there is no redirection.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetListenerId(string $TargetListenerId) Set Listener ID of a redirect target
Note: This field may return null, indicating that there is no redirection.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTargetLocationId() Obtain Forwarding rule ID of a redirect target
Note: This field may return null, indicating that there is no redirection.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetLocationId(string $TargetLocationId) Set Forwarding rule ID of a redirect target
Note: This field may return null, indicating that there is no redirection.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRewriteCode() Obtain Redirection status code
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRewriteCode(integer $RewriteCode) Set Redirection status code
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getTakeUrl() Obtain Whether the matched URL is carried in redirection.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTakeUrl(boolean $TakeUrl) Set Whether the matched URL is carried in redirection.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getRewriteType() Obtain Redirection type. Manual: manual redirection; Auto: automatic redirection.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRewriteType(string $RewriteType) Set Redirection type. Manual: manual redirection; Auto: automatic redirection.
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class RewriteTarget extends AbstractModel
{
    /**
     * @var string Listener ID of a redirect target
Note: This field may return null, indicating that there is no redirection.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TargetListenerId;

    /**
     * @var string Forwarding rule ID of a redirect target
Note: This field may return null, indicating that there is no redirection.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TargetLocationId;

    /**
     * @var integer Redirection status code
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $RewriteCode;

    /**
     * @var boolean Whether the matched URL is carried in redirection.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TakeUrl;

    /**
     * @var string Redirection type. Manual: manual redirection; Auto: automatic redirection.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $RewriteType;

    /**
     * @param string $TargetListenerId Listener ID of a redirect target
Note: This field may return null, indicating that there is no redirection.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TargetLocationId Forwarding rule ID of a redirect target
Note: This field may return null, indicating that there is no redirection.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RewriteCode Redirection status code
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $TakeUrl Whether the matched URL is carried in redirection.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $RewriteType Redirection type. Manual: manual redirection; Auto: automatic redirection.
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("TargetListenerId",$param) and $param["TargetListenerId"] !== null) {
            $this->TargetListenerId = $param["TargetListenerId"];
        }

        if (array_key_exists("TargetLocationId",$param) and $param["TargetLocationId"] !== null) {
            $this->TargetLocationId = $param["TargetLocationId"];
        }

        if (array_key_exists("RewriteCode",$param) and $param["RewriteCode"] !== null) {
            $this->RewriteCode = $param["RewriteCode"];
        }

        if (array_key_exists("TakeUrl",$param) and $param["TakeUrl"] !== null) {
            $this->TakeUrl = $param["TakeUrl"];
        }

        if (array_key_exists("RewriteType",$param) and $param["RewriteType"] !== null) {
            $this->RewriteType = $param["RewriteType"];
        }
    }
}
