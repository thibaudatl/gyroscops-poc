<?php

namespace spec\Kiboko\Component\Bucket;

use Kiboko\Component\Bucket\AppendableIteratorRejectionResultBucket;
use Kiboko\Contract\Bucket\RejectionResultBucketInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AppendableIteratorRejectionResultBucketSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(AppendableIteratorRejectionResultBucket::class);
        $this->shouldBeAnInstanceOf(RejectionResultBucketInterface::class);
    }

    function it_has_non_empty_rejection()
    {
        $this->beConstructedWith(
            new \ArrayIterator([
                new \stdClass(),
                new \stdClass(),
                new \stdClass(),
            ])
        );

        $this->walkRejection()->shouldHaveCount(3);
    }

    function it_can_append_rejection()
    {
        $this->beConstructedWith(
            new \EmptyIterator()
        );

        $this->append(
            new \ArrayIterator([
                new \stdClass(),
                new \stdClass(),
            ])
        );

        $this->append(
            new \ArrayIterator([
                new \stdClass(),
            ])
        );

        $this->walkRejection()->shouldHaveCount(3);
    }
}
