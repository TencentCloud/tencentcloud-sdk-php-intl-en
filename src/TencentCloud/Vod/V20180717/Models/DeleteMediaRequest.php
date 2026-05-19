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
 * DeleteMedia request structure.
 *
 * @method string getFileId() Obtain Unique identifier of the media file.
 * @method void setFileId(string $FileId) Set Unique identifier of the media file.
 * @method integer getSubAppId() Obtain <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method array getDeleteParts() Obtain Specify the part that needs to be deleted this time. Default value is "[]", which means delete media and all its corresponding video processing files.
 * @method void setDeleteParts(array $DeleteParts) Set Specify the part that needs to be deleted this time. Default value is "[]", which means delete media and all its corresponding video processing files.
 */
class DeleteMediaRequest extends AbstractModel
{
    /**
     * @var string Unique identifier of the media file.
     */
    public $FileId;

    /**
     * @var integer <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var array Specify the part that needs to be deleted this time. Default value is "[]", which means delete media and all its corresponding video processing files.
     */
    public $DeleteParts;

    /**
     * @param string $FileId Unique identifier of the media file.
     * @param integer $SubAppId <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param array $DeleteParts Specify the part that needs to be deleted this time. Default value is "[]", which means delete media and all its corresponding video processing files.
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("DeleteParts",$param) and $param["DeleteParts"] !== null) {
            $this->DeleteParts = [];
            foreach ($param["DeleteParts"] as $key => $value){
                $obj = new MediaDeleteItem();
                $obj->deserialize($value);
                array_push($this->DeleteParts, $obj);
            }
        }
    }
}
