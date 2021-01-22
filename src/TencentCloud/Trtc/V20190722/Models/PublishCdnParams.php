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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Relayed push parameters of a non-Tencent Cloud CDN
 *
 * @method integer getBizId() Obtain Tencent Cloud LVB BizId
 * @method void setBizId(integer $BizId) Set Tencent Cloud LVB BizId
 * @method array getPublishCdnUrls() Obtain Destination of non-Tencent Cloud CDN relayed push. It is possible to push to only one non-Tencent Cloud CDN address at a time.
 * @method void setPublishCdnUrls(array $PublishCdnUrls) Set Destination of non-Tencent Cloud CDN relayed push. It is possible to push to only one non-Tencent Cloud CDN address at a time.
 */
class PublishCdnParams extends AbstractModel
{
    /**
     * @var integer Tencent Cloud LVB BizId
     */
    public $BizId;

    /**
     * @var array Destination of non-Tencent Cloud CDN relayed push. It is possible to push to only one non-Tencent Cloud CDN address at a time.
     */
    public $PublishCdnUrls;

    /**
     * @param integer $BizId Tencent Cloud LVB BizId
     * @param array $PublishCdnUrls Destination of non-Tencent Cloud CDN relayed push. It is possible to push to only one non-Tencent Cloud CDN address at a time.
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
        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }

        if (array_key_exists("PublishCdnUrls",$param) and $param["PublishCdnUrls"] !== null) {
            $this->PublishCdnUrls = $param["PublishCdnUrls"];
        }
    }
}
