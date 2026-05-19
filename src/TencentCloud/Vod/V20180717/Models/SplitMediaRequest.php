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
 * SplitMedia request structure.
 *
 * @method string getFileId() Obtain Video ID.
 * @method void setFileId(string $FileId) Set Video ID.
 * @method array getSegments() Obtain Video split task information list, simultaneously support up to 100 split information.
 * @method void setSegments(array $Segments) Set Video split task information list, simultaneously support up to 100 split information.
 * @method integer getSubAppId() Obtain <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method string getSessionContext() Obtain Identify source context, pass through user request information, return the value of this field in SplitMediaComplete callback and task flow status change callback, longest 1000 character.
 * @method void setSessionContext(string $SessionContext) Set Identify source context, pass through user request information, return the value of this field in SplitMediaComplete callback and task flow status change callback, longest 1000 character.
 * @method string getSessionId() Obtain Identifier for task deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
 * @method void setSessionId(string $SessionId) Set Identifier for task deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
 * @method integer getTasksPriority() Obtain Task priority. The higher the value, the higher the priority. The value ranges from -10 to 10. If left blank, the default value is 0.
 * @method void setTasksPriority(integer $TasksPriority) Set Task priority. The higher the value, the higher the priority. The value ranges from -10 to 10. If left blank, the default value is 0.
 */
class SplitMediaRequest extends AbstractModel
{
    /**
     * @var string Video ID.
     */
    public $FileId;

    /**
     * @var array Video split task information list, simultaneously support up to 100 split information.
     */
    public $Segments;

    /**
     * @var integer <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var string Identify source context, pass through user request information, return the value of this field in SplitMediaComplete callback and task flow status change callback, longest 1000 character.
     */
    public $SessionContext;

    /**
     * @var string Identifier for task deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
     */
    public $SessionId;

    /**
     * @var integer Task priority. The higher the value, the higher the priority. The value ranges from -10 to 10. If left blank, the default value is 0.
     */
    public $TasksPriority;

    /**
     * @param string $FileId Video ID.
     * @param array $Segments Video split task information list, simultaneously support up to 100 split information.
     * @param integer $SubAppId <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param string $SessionContext Identify source context, pass through user request information, return the value of this field in SplitMediaComplete callback and task flow status change callback, longest 1000 character.
     * @param string $SessionId Identifier for task deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
     * @param integer $TasksPriority Task priority. The higher the value, the higher the priority. The value ranges from -10 to 10. If left blank, the default value is 0.
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Segments",$param) and $param["Segments"] !== null) {
            $this->Segments = [];
            foreach ($param["Segments"] as $key => $value){
                $obj = new SplitMediaTaskConfig();
                $obj->deserialize($value);
                array_push($this->Segments, $obj);
            }
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }
    }
}
