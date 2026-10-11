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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * WebUI access information.
 *
 * @method string getUrl() Obtain <p>Access address, which may be left empty.</p>
 * @method void setUrl(string $Url) Set <p>Access address, which may be left empty.</p>
 * @method integer getWebUIStatus() Obtain <p>WebUI status. Valid values:<br>-1: indicates that the current service does not have WebUI;<br>0: indicates that the current service has WebUI but does not have the KNOX service installed;<br>1: indicates that the current service has WebUI and has the KNOX service installed, but it does not have public network access enabled for the KNOX service;<br>2: indicates that the current service has WebUI, has the KNOX service installed, and has public network access enabled.</p>
 * @method void setWebUIStatus(integer $WebUIStatus) Set <p>WebUI status. Valid values:<br>-1: indicates that the current service does not have WebUI;<br>0: indicates that the current service has WebUI but does not have the KNOX service installed;<br>1: indicates that the current service has WebUI and has the KNOX service installed, but it does not have public network access enabled for the KNOX service;<br>2: indicates that the current service has WebUI, has the KNOX service installed, and has public network access enabled.</p>
 * @method string getServiceName() Obtain <p>Service name.</p>
 * @method void setServiceName(string $ServiceName) Set <p>Service name.</p>
 */
class WebUIInfo extends AbstractModel
{
    /**
     * @var string <p>Access address, which may be left empty.</p>
     */
    public $Url;

    /**
     * @var integer <p>WebUI status. Valid values:<br>-1: indicates that the current service does not have WebUI;<br>0: indicates that the current service has WebUI but does not have the KNOX service installed;<br>1: indicates that the current service has WebUI and has the KNOX service installed, but it does not have public network access enabled for the KNOX service;<br>2: indicates that the current service has WebUI, has the KNOX service installed, and has public network access enabled.</p>
     */
    public $WebUIStatus;

    /**
     * @var string <p>Service name.</p>
     */
    public $ServiceName;

    /**
     * @param string $Url <p>Access address, which may be left empty.</p>
     * @param integer $WebUIStatus <p>WebUI status. Valid values:<br>-1: indicates that the current service does not have WebUI;<br>0: indicates that the current service has WebUI but does not have the KNOX service installed;<br>1: indicates that the current service has WebUI and has the KNOX service installed, but it does not have public network access enabled for the KNOX service;<br>2: indicates that the current service has WebUI, has the KNOX service installed, and has public network access enabled.</p>
     * @param string $ServiceName <p>Service name.</p>
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("WebUIStatus",$param) and $param["WebUIStatus"] !== null) {
            $this->WebUIStatus = $param["WebUIStatus"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }
    }
}
