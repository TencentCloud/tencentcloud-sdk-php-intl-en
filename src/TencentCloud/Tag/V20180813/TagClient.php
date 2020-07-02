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

namespace TencentCloud\Tag\V20180813;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tag\V20180813\Models as Models;

/**
 * @method Models\AddResourceTagResponse AddResourceTag(Models\AddResourceTagRequest $req) This API is used to associate resources with tags.
 * @method Models\CreateTagResponse CreateTag(Models\CreateTagRequest $req) This API is used to create a tag key and tag value pair.
 * @method Models\DeleteResourceTagResponse DeleteResourceTag(Models\DeleteResourceTagRequest $req) This API is used to unassociate tags and resources.
 * @method Models\DeleteTagResponse DeleteTag(Models\DeleteTagRequest $req) This API is used to delete a tag key and tag value pair.
 * @method Models\DescribeResourceTagsResponse DescribeResourceTags(Models\DescribeResourceTagsRequest $req) This API is used to query the tags associated with a resource.
 * @method Models\DescribeResourceTagsByResourceIdsResponse DescribeResourceTagsByResourceIds(Models\DescribeResourceTagsByResourceIdsRequest $req) This API is used to query tag key and value pairs for existing resources.
 * @method Models\DescribeResourceTagsByTagKeysResponse DescribeResourceTagsByTagKeys(Models\DescribeResourceTagsByTagKeysRequest $req) This API is used to get resource tags based on tag keys.
 * @method Models\DescribeResourcesByTagsResponse DescribeResourcesByTags(Models\DescribeResourcesByTagsRequest $req) This API is used to query resources by tags.
 * @method Models\DescribeTagKeysResponse DescribeTagKeys(Models\DescribeTagKeysRequest $req) This API is used to query tag keys in an existing tag list.

 * @method Models\DescribeTagValuesResponse DescribeTagValues(Models\DescribeTagValuesRequest $req) This API is used to query tag values in an existing tag list.
 * @method Models\DescribeTagsResponse DescribeTags(Models\DescribeTagsRequest $req) This API is used to query existing tag lists.

 * @method Models\ModifyResourceTagsResponse ModifyResourceTags(Models\ModifyResourceTagsRequest $req) This API is used to modify all tags associated with a resource.
 * @method Models\UpdateResourceTagValueResponse UpdateResourceTagValue(Models\UpdateResourceTagValueRequest $req) This API is used to modify the values of tags associated with a resource (the tag key does not change).
 */

class TagClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tag.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $version = "2018-08-13";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("tag")."\\"."V20180813\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
